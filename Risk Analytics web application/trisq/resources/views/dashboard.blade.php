@extends('layouts.master')
@section('title', 'Trisq Dashboard')

@section('content')
<div class="page-content-wrapper col-md-12">
    <!-- Keep all page content within the page-content inset div! -->
    <div class="page-content inset" id="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading title-heading">
                        <h4 class="panel-title">Risk Analytics</h4>
                    </div>
                    <div class="panel-body">
                        <h4>To start please select an entry from the left menu.</h4>
                        <hr/>
<p>
  <i class="fa fa-product-hunt" aria-hidden="true"></i> 
  In the <a href="/products/view"><i>Products</i></a> you can view, add, edit or remove products for risk analitycs.
</p>
<br>
<p>
  <i class="fa fa-cogs" aria-hidden="true"></i> 
  In the <a href="/figra/manage/products"><i>Business components</i></a> you can view, add, or edit business components that interact with your products.
</p>
<br>
<p>
  <i class="fa fa-industry" aria-hidden="true"></i> 
  In the <a href="/figra/manage/products"><i>Best practices</i></a> you can view, add, edit or remove best practices used inside you organizations. This best practices define the way a product / service should be treated inside your organization.
</p>
<br>
<p>
  <i class="fa fa-th-large" aria-hidden="true"></i> 
  In the <a href="/risk_types/view"><i>Risk types</i></a> you can view, add, edit or remove risk types for risk analitycs.
</p>
<br>
<p>
  <i class="fa fa-list" aria-hidden="true"></i>
  In the <a href="/figra/manage/products"><i>Risk criteria</i></a> you can view, add, edit or remove risk criteria for risk analitycs. Risk criteria group risk types for a specific business.
</p>
<br>
<p>
  <i class="fa fa-tasks" aria-hidden="true"></i>
  In the <a href="/figra/manage/products"><i>Risk triggered</i></a> you can view, add, edit or remove risk triggered for risk analitycs. In here you can define wich risks are triggered for a specific product.
</p>
<br>
<p>
  <i class="fa fa-users" aria-hidden="true"></i>
  In the <a href="/figra/manage/products"><i>Teams</i></a> you can view, add, edit or remove teams for risk analitycs. Teams represent a department inside your organization. Teams have processes and activities that define their interaction with a product and a business component.
</p>
<br>
<p>
  <i class="fa fa-star" aria-hidden="true"></i>
  In the <a href="/figra/manage/products"><i>Processes</i></a> you can view, add, edit or remove processes for risk analitycs. Procesess consist of a set of activities that a team performs on a business component.
</p>
<br>
<p>
  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
  In the <a href="/figra/manage/products"><i>Activities</i></a> you can view, add, edit or remove activities for risk analitycs. Activities are specific for a process, thei are evaluated against a set of best practices and produce a total score for a process.
</p>
<br>
<p>
  <i class="fa fa-list-alt" aria-hidden="true"></i>
  In the <a href="/figra/manage/products"><i>Activity types</i></a> you can view, add, edit or remove activity types for risk analitycs. Activity types are activity types.
</p>
<br>
<p>
  <i class="fa fa-sitemap" aria-hidden="true"></i>
  In the <a href="/figra/manage/products"><i>Performances</i></a> you can view, add, edit or remove performances for risk analitycs. Performances are a set of values that define a total score for a product / service based on the processes, best practices and business components that interact with the given product.
</p>
<br>
<p>
  <span class="glyphicon glyphicon-info-sign"></span> 
  In the <a href="/figra/vbw"><i>Value bands</i></a> you can view the current inherent risk for each product in each risk category, the curent EUF's, current value band weighting and the current inherent risk.
</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
