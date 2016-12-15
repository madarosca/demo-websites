@extends('layouts.master')
@section('title', 'Trisq Home')

@section('content')
<div class="page-content-wrapper col-md-12">
    <!-- Keep all page content within the page-content inset div! -->
    <div class="page-content inset" id="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading title-heading">
                        <h4 class="panel-title">Hello <strong>{{Auth::user()->name}},</strong> Welcome to ‘Risk Accounting’</h4>
                    </div>
                    <div class="panel-body">
                        <h4>Financial InterGroup (FIG) has codified a new accounting system ‘FIGRA’ that revolutionizes enterprise risk management (ERM)</h4>
<br>
<p>Conventional ERM systems are generally assessment based and, consequently, they typically report results via an assessment metric often based on three colors… red, amber and green. The managerial usefulness of such systems is limited for a number of reasons: first, ‘assessment’ as opposed to ‘measurement’ is inherently subjective and not easily audited; second, an assessment metric cannot be aggregated to support important management techniques such as trend analysis, benchmarking and ranking and the comparison of actual usage against operating limits. To state the obvious, you can’t aggregate and compare colors.</p>
<br>
<p>The evolving risk landscape in which firms operate has undergone dramatic change in little more than a generation due to: advances in science and technology and an ever-growing dependency on globally interconnected electronic data and information networks; globalization and geopolitical uncertainties leading to supply chain vulnerabilities; the use of increasingly complex and sophisticated financial products to manage financial risks; and much more. This has caused boards of directors, CEOs and other C-suite executives to become increasingly concerned with risk and its potential to trigger material unexpected losses which, as recent events such as the financial crisis of 2007/8 demonstrate, can severely impact or even wipe out firms’ capital. </p>
<br>
<p>Whereas accounting standards such as IFRS and GAAP are aimed at ensuring that enterprises present a fair view of financial condition, there are no equivalent standards that apply to risk. In other words, a firm’s stakeholders - investors, regulators, customers and auditors – receive little or no information on the risks firms accept absolutely or in comparison to others in order to create shareholder value. </p>
<br>
<p>The misalignment between finance and risk reporting is what academics have set out to resolve through their codification of the new accounting technique referred to as ‘Risk Accounting’. It begins with the assertion that effective ERM must operate within a standardized system of risk measurement using a common risk metric that expresses all forms of risk. Accordingly, a unit of risk measurement unique to risk accounting has been created, the ‘Risk Unit’ or ‘RU’.</p>
<br>
<p>Analogous to financial accounting where profits are created through the sale of products and services, risk accounting assumes that exposure to risk is similarly correlated with revenue generation. For management reporting, transactions associated with the sale of products and services are tagged with codes that uniquely identify products, customers, business lines, organizational components, legal entities and locations. For risk reporting these same transactions are tagged with additional codes that are used in a calculation of each transaction’s risk weighted value, that is, its exposure to risk in RUs.</p>
<br>
<p>The first step in risk accounting is to identify the primary risk types to which each industry is exposed. For example, in banking these are deemed to be operational, credit, market, liquidity, interest rate and conduct risks. </p>
<br>
<p>Three sets of standardized tables provide the risk-weighted factors used in the calculation:
  <ul>
    <li><strong>Product Risk Table</strong>: provides risk-weights according to the risk characteristics of each marketed product according to criteria such as complexity, toxicity, rate of decomposition, method of distribution, method of trading etc.</li>
    <li><strong>Value Table</strong>: is used to convert revenue amounts according to accounting records into scaled value band weightings (VBWs)</li>
    <li><strong>Best Practice Scoring Templates</strong>: are used to calculate the risk mitigation index (RMI) based on key risk indicators (KRIs) that reflect the operational status of each department and underlying processes</li>
  </ul>
</p>
<br>
<p>These risk-weighted factors are then used to calculate three core metrics for each risk type triggered by the product in question:
  <ul>
    <li><strong>Inherent Risk</strong>: is the risk-weighted transaction value, expressed in RUs, that represents its maximum possible loss </li>
    <li><strong>Risk Mitigation Index (RMI)</strong>: is a dynamic measure on a scale of 1 to 100, where 100 is consensus agreed best practice, that represents, in percentage terms, the portion of Inherent Risk that is mitigated through the effective management and control of the firm’s operating environment </li>
    <li><strong>Residual Risk</strong>: is the portion of a transaction’s Inherent Risk, also expressed in RUs, not covered by effective risk mitigation - represented by the RMI – that represents its probability of loss </li>
  </ul>
</p>
<br>
<p>The pairing of accounting and risk values in a single source of controlled and audited accounting data at the transaction level enables the production of combined finance and risk reports and the computation of enterprise-wide risk/return metrics. Feedback loops give managers real-time or near real-time information on risk mitigation initiatives together with calculations of the associated improvement in RMIs and reduced residual RUs.</p>
<br>
<p>Given that risk accounting is an extension of management accounting, risk appetite can also be calibrated in RMIs and residual RUs and become an integral part of firms’ budgeting and planning cycles thereby constituting a true ERM system. The RMI is the de facto measure of risk culture as it blends risk attributes from across the enterprise.</p>
<br>
<p>A more detailed description of risk accounting is available in a <a href="http://papers.ssrn.com/sol3/papers.cfm?abstract_id=2726638" target="_new">research working paper</a> which has also been published in the Journal of Risk Management in Financial Institutions. Whereas the theoretical models and worked examples included in the paper relate to banking, the method can be adapted for non-banks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
