--
-- products
--
create table products (
  id          serial primary key,
  name        text,
  category    text,
  description text,
  volume      numeric,
  vbw         numeric
);
comment on table products is 'Banking and trading products';
comment on column products.category is 'Banking|Trading';
comment on column products.vbw is 'value band weighting';
comment on column products.volume is 'volume transacted';

insert into products (id, name, category, description, volume, vbw) values
  (1, 'FX Forwards', 'Trading', 'Total volumes/amounts traded', 254, 33.1),
  (2, 'Commercial Loans (Secured)', 'Banking', 'Total new loans, including renewals, booked', 147, 33.1),
  (3, 'Fixed Term Deposits', 'Banking', 'Total new deposits, including renewals, booked', 89, 27.0),
  (4, 'Repos', 'Banking', 'Total volumes/amounts sold under repo agreements', 95, 27.0),
  (5, 'Cross Currency Swaps', 'Banking', 'Total volumes/notional amounts transacted', 267, 40.4),
  (6, 'Futures', 'Trading', 'Total volumes/amounts traded', 876, 49.1),
  (7, 'Collateralised Debt Obligations (CDOs)', 'Trading', 'Total volumes/amounts traded', 1233, 59.3),
  (8, 'Equities', 'Trading', 'Total volumes/amounts traded', 245, 33.1),
  (9, 'Fixed Income', 'Trading', 'Total volumes/amounts traded', 1125, 59.3),
  (10, 'Payment Orders', 'Banking', 'Total volumes/amounts paid', 85, 27.0);

/* volume amoune expressed in $ millions */
update products set volume = volume * 1000000;


--
-- business components
--
create table business_components (
  id          serial primary key,
  name        text,
  description text,
  category    char(32),
  order_seq   numeric
);
comment on table business_components is 'Business components: touch points in processing risk';
comment on column business_components.category is 'Processing|Reference Data|Applications';
comment on column business_components.order_seq is 'Order sequence';

insert into business_components(id, name, order_seq) values
  (1, 'Product & Service Pricing', 1000),
  (2, 'Deal Structuring', 2000),
  (3, 'Order Management', 3000),
  (4, 'Pre-Trade Validation', 4000),
  (5, 'Quote/Price Management', 5000),
  (6, 'Trade Execution & Capture', 6000),
  (7, 'Cash Management', 7000),
  (8, 'Trade Confirmation & Matching', 8000),
  (9, 'Position Control & Amendments', 9000),
  (10, 'Transaction Reporting', 10000),
  (11, 'Credit Limit Monitoring', 11000),
  (12, 'Trading Limit Monitoring', 12000),
  (13, 'Trade Settlements', 13000),
  (14, 'Depot/Custody/Collateral Management ', 14000),
  (15, 'Loans Processing', 15000),
  (16, 'Payments', 16000),
  (17, 'Nostro Reconcilement', 17000),
  (18, 'Trading Account Reconciliations', 18000),
  (19, 'G/L Proofs & Substantiation', 19000),
  (20, 'Management Reporting', 20000),
  (21, 'Regulatory & External Reporting', 21000);
update business_components set category='Processing';
insert into business_components(id, name, category, order_seq) values
  (22, 'Client & Counterparty Data', 'Reference Data', 1000),
  (23, 'Market Data', 'Reference Data', 2000),
  (24, 'Products & Instruments Data', 'Reference Data', 3000);
insert into business_components(id, name, category, order_seq) values
  (25, 'Trading System', 'Applications', 1000),
  (26, 'Global Loans System', 'Applications', 2000),
  (27, 'Funds Transfer System', 'Applications', 3000),
  (28, 'Global Nostros System', 'Applications', 4000),
  (29, 'Global Ledger System', 'Applications', 5000),
  (30, 'Funding & Liquidity System', 'Applications', 6000);

--
-- risk_types
--
create table risk_types (
  code        char(32) primary key,
  name        text,
  category    text,
  description text,
  calculation_type text
);
comment on table risk_types is 'Risk types for inherent risk';
comment on column risk_types.calculation_type is 'algorithm/formula for calculation';
comment on column risk_types.category is 'processing|financial|conduct';
comment on column risk_types.calculation_type is 'criteria and items selection method';

insert into risk_types (code, name, category, description, calculation_type) values
  ('processing', 'Processing Risk', 'operational', 'Transactions accepted for processing are properly approved and processing is complete, accurate and timely', 'add EUF of each selected risk_item'),
  ('refdata', 'Reference Data', 'operational', 'Reference Data', ''),
  ('applications', 'Applications', 'operational', 'Applications', ''),
  ('market', 'Maket Risk', 'financial', 'A trading position can be immediately liquidated without incurring exceptional losses', 'select one risk_item in each risk_criteria'),
  ('credit', 'Credit Risk', 'financial', 'Collateral can be immediately realised without incurring exceptional losses or the credit is unsecured', 'select one risk_item from all risk_criteria'),
  ('liquidity', 'Liquidity Risk', 'financial', 'Stable sources of funding are readily available to fund immediate and foreseeable operating needs', 'select one risk_item'),
  ('interest', 'Interest Rate Risk', 'financial', 'Interest rate sensitive assets and liabilities can be immediately extinguished, replaced, extended or renewed without incurring exceptional losses', 'select one risk_item in each risk_criteria'),
  ('conduct', 'Conduct Risk', 'conduct', 'Positive customer outcomes are ensured and customers are treated fairly', 'add EUF of each selected risk_item');


--
-- risk criteria
--
create table risk_criteria (
  code            char(32) primary key,
  risk_type_code  char(32) references risk_types(code),
  name            text
);

insert into risk_criteria (code, risk_type_code, name) values
  ('operational', 'processing', 'Number of operational touch-points, i.e. Business Components that interacts with the product');
insert into risk_criteria (code, risk_type_code, name) values
  ('market_prices', 'market', 'Availability and reliability of market prices'),
  ('trade_manner', 'market', 'The manner in which the product is traded');
insert into risk_criteria (code, risk_type_code, name) values
  ('commercial', 'credit', 'Commercial'),
  ('counterparty', 'credit', 'Counterparty'),
  ('retail', 'credit', 'Retail');
insert into risk_criteria (code, risk_type_code, name) values
  ('interest', 'interest', 'Interest sensitive (asset & liability) products'),
  ('derivatives', 'interest', 'Interest rate derivatives'),
  ('maturity', 'interest', 'Maturity');


--
-- risk items
--
create table risk_items (
  id                      serial primary key,
  risk_type_code          char(32) references risk_types(code),
  risk_criteria_code      char(32) references risk_criteria(code),
  business_component_id   integer references business_components(id),
  name                    text,
  description             text,
  euf                     numeric
);

-- generate 'processing', 'operational' risk_items for each component
insert into risk_items (risk_type_code, risk_criteria_code, business_component_id, name, euf)
  select
    'processing', 'operational', id, name, 1
  from business_components order by order_seq;

insert into risk_items (risk_type_code, risk_criteria_code, name, description, euf) values
  ('market', 'market_prices', 'Active market prices', '', 2),
  ('market', 'market_prices', 'Inactive but observable market prices', '', 5),
  ('market', 'market_prices', 'Unobservable prices that need judgment', '', 8),
  ('market', 'market_prices', 'No prices but economic or other assumptions (demographic, holistic etc.) are required', '', 10),
  ('market', 'trade_manner', 'Electronic', '', 2),
  ('market', 'trade_manner', 'Hybrid (electronic + floor / voice-based)', '', 4),
  ('market', 'trade_manner', 'Floor / voice-based', '', 6),
  ('market', 'trade_manner', 'Over-The-Counter (OTC)', '', 10),
  ('market', 'trade_manner', 'Other', '', 10);

insert into risk_items (risk_type_code, risk_criteria_code, name, description, euf) values
  ('credit', 'commercial', 'Casual Overdraft', '', 2),
  ('credit', 'commercial', 'Credit Card', '', 2),
  ('credit', 'commercial', 'Unsecured', '', 2),
  ('credit', 'commercial', 'Cash', '', 4),
  ('credit', 'counterparty', 'Cross Currency Swaps', '', 8),
  ('credit', 'counterparty', 'Security Based Swaps', '', 8),
  ('credit', 'counterparty', 'Options', '', 8),
  ('credit', 'counterparty', 'Credit Default Swap', '', 14),
  ('credit', 'counterparty', 'Collateralized Debt Obligations and Asset Backed Securities', '', 18),
  ('credit', 'retail', 'Casual Overdraft', '', 2),
  ('credit', 'retail', 'Credit Card', '', 2),
  ('credit', 'retail', 'Unsecured', '', 2),
  ('credit', 'retail', 'Autos', '', 8),
  ('credit', 'retail', 'Personal Guarantee', '', 14),
  ('credit', 'retail', 'Residential Property', '', 16);

insert into risk_items (risk_type_code, name, euf) values
  ('conduct', 'Investment product', 5),
  ('conduct', 'Sales incentive scheme linked', 5),
  ('conduct', 'Bundled with other product(s), e.g. PPI/Loan, IRS/Loan', 5),
  ('conduct', 'Complexity (scaled to Credit EUF)', 5);

insert into risk_items (risk_type_code, name, euf) values
  ('liquidity', 'Coins and banknotes • All central bank reserves ...', 0),
  ('liquidity', 'Cash, securities or other assets ...', 17),
  ('liquidity', 'All assets that are encumbered for a period of one year or more ...', 20);

insert into risk_items (risk_type_code, risk_criteria_code, name, euf) values
  ('interest', 'interest', 'Floating', 5),
  ('interest', 'interest', 'Fixed', 10),
  ('interest', 'derivatives', 'Interest rate swap', 5),
  ('interest', 'derivatives', 'Cross currency swap', 10),
  ('interest', 'maturity', 'Less than 1 year', 1),
  ('interest', 'maturity', 'Between 1 and 5 years', 5),
  ('interest', 'maturity', 'Greater than 5 years', 10);

--
-- risk triggered
--
create table risk_triggered (
  id                      serial primary key,
  risk_item_id            integer references risk_items(id),
  product_id              integer references products(id)
);
comment on table risk_triggered is 'Selected Risk triggered by each Product for specific Risk Items';

-- processing operational risk
insert into risk_triggered (product_id, risk_item_id) values
  /* 20 touch points for CDOs */
  (7, 1),
  (7, 2),
  (7, 3),
  (7, 4),
  (7, 5),
  (7, 6),
  (7, 7),
  (7, 8),
  (7, 9),
  (7, 10),
  (7, 11),
  (7, 12),
  (7, 13),
  (7, 14),
  (7, 16),
  (7, 17),
  (7, 18),
  (7, 19),
  (7, 20),
  (7, 21),
  /* 15 touch points for FX Forwards */
  (1, 5),
  (1, 6),
  (1, 7),
  (1, 8),
  (1, 9),
  (1, 10),
  (1, 11),
  (1, 12),
  (1, 13),
  (1, 16),
  (1, 17),
  (1, 18),
  (1, 19),
  (1, 20),
  (1, 21),
  /* 6 touch points for Payment Orders */
  (10, 7),
  (10, 16),
  (10, 17),
  (10, 19),
  (10, 20),
  (10, 21);

-- market risk for CDOs
insert into risk_triggered (product_id, risk_item_id) values
  (7, 24),
  (7, 29);
-- credit risk for CDOs
insert into risk_triggered (product_id, risk_item_id) values
  (7, 39);
-- conduct risk for CDOs
insert into risk_triggered (product_id, risk_item_id) values
  (7, 46),
  (7, 47),
  (7, 49);
-- liquidity risk for CDOs
insert into risk_triggered (product_id, risk_item_id) values
  (7, 51);



-- TODO: implement as materialized views (for each risk type calculation ???)
--
-- summary of inherent risk
--
create table summary_inherent_risk (
  id                      serial primary key,
  risk_type_code          char(32) references risk_types(code),
  product_id              integer references products(id),
  total_euf               numeric,
  ru                      numeric
);
comment on table summary_inherent_risk is 'Summary of inherent risk by risk type and product';
comment on column summary_inherent_risk.total_euf is 'Exposure Uncertainty Factor; to be summed from triggered risk_items of product';
comment on column summary_inherent_risk.ru is 'Risk Units: total_euf * product_vbw';

-- inherent risk sheet from SB Calculations
-- FX Forwards
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (1, 'processing', 15),
  (1, 'market',     4),
  (1, 'credit',     4),
  (1, 'conduct',    10),
  (1, 'liquidity',  0),
  (1, 'interest',   0);
-- Commercial Loans (Secured)
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (2, 'processing', 8),
  (2, 'market',     0),
  (2, 'credit',     8),
  (2, 'conduct',    0),
  (2, 'liquidity',  17),
  (2, 'interest',   20);
-- Fixed Term Deposits
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (3, 'processing', 7),
  (3, 'market',     0),
  (3, 'credit',     0),
  (3, 'conduct',    0),
  (3, 'liquidity',  0),
  (3, 'interest',   6);
-- Repos
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (4, 'processing', 8),
  (4, 'market',     0),
  (4, 'credit',     5),
  (4, 'conduct',    0),
  (4, 'liquidity',  0),
  (4, 'interest',   6);
-- Cross Currency Swaps
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (5, 'processing', 17),
  (5, 'market',     0),
  (5, 'credit',     8),
  (5, 'conduct',    0),
  (5, 'liquidity',  0),
  (5, 'interest',   11);
-- Futures
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (6, 'processing', 18),
  (6, 'market',     4),
  (6, 'credit',     0),
  (6, 'conduct',    10),
  (6, 'liquidity',  0),
  (6, 'interest',   0);
-- Collateralised Debt Obligations (CDOs)
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (7, 'processing', 20),
  (7, 'market',     18),
  (7, 'credit',     18),
  (7, 'conduct',    15),
  (7, 'liquidity',  17),
  (7, 'interest',   0);
-- Equities
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (8, 'processing', 18),
  (8, 'market',     4),
  (8, 'credit',     0),
  (8, 'conduct',    10),
  (8, 'liquidity',  10),
  (8, 'interest',   0);
-- Fixed Income
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (9, 'processing', 18),
  (9, 'market',     4),
  (9, 'credit',     8),
  (9, 'conduct',    10),
  (9, 'liquidity',  3),
  (9, 'interest',   0);
-- Payment Orders
insert into summary_inherent_risk(product_id, risk_type_code, total_euf) values
  (10, 'processing', 6),
  (10, 'market',     0),
  (10, 'credit',     0),
  (10, 'conduct',    0),
  (10, 'liquidity',  0),
  (10, 'interest',   0);

-- calculate inherent risk
update summary_inherent_risk set ru = total_euf * (select vbw from products where id = product_id);

--
-- best practice categories
--
create table best_practices (
  id               serial primary key,
  name             text,
  type             char(32),
  risk_type_code   char(32) references risk_types(code)
);
comment on table best_practices is 'Best Practice Categories';
comment on column best_practices.type is 'Generic|Technical';
comment on column best_practices.risk_type_code is 'Only for Technical';

insert into best_practices (id, name) values
  (1 , 'Internal Control'),
  (2 , 'People'),
  (3 , 'Execution'),
  (4 , 'Business Continuity'),
  (5 , 'Risk Culture'),
  (6 , 'Performance Monitoring'),
  (7 , 'Logical Access Management'),
  (8 , 'Policies & Procedures'),
  (9 , 'Model Management');
update best_practices set type = 'Generic';
insert into best_practices (id, name, type, risk_type_code) values
  (10, 'Vault Management', 'Technical', 'processing'),
  (11, 'Data Quality Management', 'Technical', 'refdata'),
  (12, 'Uniqueness', 'Technical', 'refdata'),
  (13, 'Vendor Data Services', 'Technical', 'refdata'),
  (14, 'Systems Maintenance', 'Technical', 'applications'),
  (15, 'Migration & Accepteance', 'Technical', 'applications'),
  (16, 'Vendor Management', 'Technical', 'applications'),
  (17, 'Trading Limit Administration', 'Technical', 'market'),
  (18, 'Market Data Analytics', 'Technical', 'market'),
  (19, 'Credit Assessment & Approval', 'Technical', 'credit'),
  (20, 'Credit Quality Assurance', 'Technical', 'credit'),
  (21, 'Liquidity Buffer Management', 'Technical', 'liquidity'),
  (22, 'Product Approval', 'Technical', 'conduct'),
  (23, 'Incentive Programs', 'Technical', 'conduct'),
  (24, 'Customer Profiling', 'Technical', 'conduct'),
  (25, 'Interest Rate Risk Exposure Management', 'Technical', 'interest');

--
-- impacts
--
create table impacts (
  id                      serial primary key,
  best_practice_id        integer references best_practices(id),
  business_component_id   integer references business_components(id),
  weight                  numeric
);
comment on table impacts is '';
comment on column impacts.weight is '';


-- Sheet 'Ref Data' in 'SB Calculations'
-- business_component_id in [22,23,24]
-- insert into impacts (best_practice_id, business_component_id, weight) values
--   ();

insert into impacts (best_practice_id, business_component_id, weight) values
(11,22,10),
(3,22,10),
(2,22,5),
(5,22,5),
(12,22,4),
(13,22,4),
(8,22,4),
(6,22,4),
(7,22,4),
(4,22,3),
(1,22,3),
(11,23,10),
(3,23,10),
(2,23,5),
(5,23,5),
(12,23,4),
(13,23,4),
(8,23,4),
(6,23,4),
(7,23,4),
(4,23,3),
(1,23,3),
(11,24,10),
(3,24,10),
(2,24,5),
(5,24,5),
(12,24,4),
(13,24,4),
(8,24,4),
(6,24,4),
(7,24,4),
(4,24,3),
(1,24,3);

-- Table: activity_types

-- DROP TABLE activity_types;

CREATE TABLE activity_types
(
  id serial primary key,
  name character varying(200),
  description character varying(500),
  weight integer NOT NULL
)
WITH (
  OIDS=FALSE
);

insert into activity_types(name,description,weight)
values
('Handling & distribution','descriere activitate',1),
('Documentation preparation','descriere activitate',4),
('Control','descriere activitate',4),
('Prepare, capture & control transactions','descriere activitate',4),
('Transaction amendments','descriere activitate',2),
('Nostro investigation','descriere activitate',5),
('Reconciliation and substantiation','descriere activitate',5),
('General administration','descriere activitate',1),
('Physical custody, control and release','descriere activitate',10);
  
-- Table: teams

-- DROP TABLE teams;

CREATE TABLE teams
(
  id serial primary key,
  business_component_id integer NOT NULL,
  name character varying(200) NOT NULL,
  description character varying(500),
  CONSTRAINT teams_business_component_id_fkey FOREIGN KEY (business_component_id)
      REFERENCES business_components (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

insert into teams (business_component_id,name,description)
values
(15,'Commercial Loan Operations','descriere echipa'),
(15,'Reconciliation and Control','descriere echipa'),
(15,'Collateral Control','descriere echipa'),
(15,'Negotiable Collateral','descriere echipa');
  
  
-- Table: processes

-- DROP TABLE processes;

CREATE TABLE processes
(
  id serial primary key,
  team_id integer NOT NULL,
  name character varying(200) NOT NULL,
  description character varying(500),
  CONSTRAINT processes_team_id_fkey FOREIGN KEY (team_id)
      REFERENCES teams (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

insert into processes(team_id,name,description)
values
((select id from teams where name = 'Commercial Loan Operations'),'Document Preparation','descriere proces'),
((select id from teams where name = 'Commercial Loan Operations'),'Booking and Funding','descriere proces'),
((select id from teams where name = 'Commercial Loan Operations'),'Repayments','descriere proces'),
((select id from teams where name = 'Commercial Loan Operations'),'Query Resolution','descriere proces'),
((select id from teams where name = 'Reconciliation and Control'),'Nostro Investigation ','descriere proces'),
((select id from teams where name = 'Reconciliation and Control'),'Night Proof','descriere proces'),
((select id from teams where name = 'Reconciliation and Control'),'Control Account Reconciliation','descriere proces'),
((select id from teams where name = 'Reconciliation and Control'),'Non-Accrual Reclassification','descriere proces'),
((select id from teams where name = 'Collateral Control'),'Documentation Control','descriere proces'),
((select id from teams where name = 'Collateral Control'),'Collateral Control','descriere proces'),
((select id from teams where name = 'Collateral Control'),'Collateral Release','descriere proces'),
((select id from teams where name = 'Negotiable Collateral'),'Receiving Physical Collateral','descriere proces'),
((select id from teams where name = 'Negotiable Collateral'),'Releasing Physcial Collateral','descriere proces'),
((select id from teams where name = 'Negotiable Collateral'),'Vault Reconciliation','descriere proces');
  
  
-- Table: activities

-- DROP TABLE activities;

CREATE TABLE activities
(
  id serial primary key,
  activity_type_id integer NOT NULL,
  process_id integer NOT NULL,
  CONSTRAINT activity_process_fk FOREIGN KEY (process_id)
      REFERENCES processes (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT activity_type_fk FOREIGN KEY (activity_type_id)
      REFERENCES activity_types (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);



-- Table: performances

-- DROP TABLE performances;

CREATE TABLE performances
(
  id serial primary key,
  product_id integer NOT NULL,
  impact_id integer NOT NULL,
  activity_id integer,
  score numeric(11,2) NOT NULL,
  CONSTRAINT activity_performance_fk FOREIGN KEY (activity_id)
      REFERENCES activities (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT impact_performance_fk FOREIGN KEY (impact_id)
      REFERENCES impacts (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT performance_products_fk FOREIGN KEY (product_id)
      REFERENCES products (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

  
insert into performances (product_id, impact_id, score) values
(1,7,50),
(1,8,55),
(1,9,80),
(1,10,70),
(1,11,20),
(1,12,85),
(1,13,85),
(1,14,75),
(1,15,45),
(1,16,95),
(1,17,85),
(1,18,50),
(1,19,50),
(1,20,60),
(1,21,70),
(1,22,15),
(1,23,65),
(1,24,85),
(1,25,45),
(1,26,65),
(1,27,95),
(1,28,45),
(1,29,90),
(1,30,95),
(1,31,85),
(1,32,70),
(1,33,100),
(1,34,85),
(1,35,85),
(1,36,95),
(1,37,80),
(1,38,95),
(1,39,90);

