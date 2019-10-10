<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/dt-plugin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:55:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<?php include_once("nav.php") ?>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="p-fixed users-main">
<div class="user-box">
<div class="chat-search-box">
<a class="back_friendlist">
<i class="feather icon-x"></i>
</a>
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
</div>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
 <p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="chat-reply-box">
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" class="form-control" placeholder="Write hear . . ">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<?php include_once("sidebar.php") ?>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-server bg-c-blue"></i>
<div class="d-inline">
<h5>Plugin DataTable</h5>
<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Data Table</a>
</li>
<li class="breadcrumb-item"><a href="#!">Plugin Initialization</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">

<div class="card">
<div class="card-header">
<h5>API Plug-in Methods</h5>
<span>The example below shows DataTables loading data for a table from arrays as the data source, where the structure of the row's data source in this example is:</span>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul>  </div>
</div>
<div class="card-block">
<div class="dt-plugin-buttons"></div>
<div class="dt-responsive table-responsive">
<table id="dt-plugin-method" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
 <td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
 <td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
 <tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
 <td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
 <td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Ordering Plug-ins (with type detection)</h5>
<span>This example shows ordering with using an enumerated type.</span>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="dt-ordering" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>Low</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>Low</td>
 </tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>Low</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>Medium</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>Low</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>Medium</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>Low</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>Low</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>Low</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>Low</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>Low</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>Low</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>Medium</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>Low</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>Medium</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>Low</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>High</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>Low</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>Low</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>Low</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>Low</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>High</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>Low</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>Low</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>High</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>Low</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>Medium</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>Low</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>High</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>Low</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>Low</td>
</tr>
<tr>
<td>Suki Burks</td>
 <td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>Low</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>Low</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>Low</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>Low</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>Low</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>Low</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>Low</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>Medium</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>Low</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>Medium</td>
</tr>
<tr>
 <td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>Low</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>Low</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>Low</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>Low</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>Low</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>Low</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>Low</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>Low</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>Low</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>Low</td>
</tr>
 <tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>Medium</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>Low</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>Low</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>Low</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>Low</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>Low</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Custom Filtering - Range Search</h5>
<span>This example shows a search being performed on the age column in the data, based upon two inputs.</span>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li>  <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table class="m-b-20">
<tbody>
<tr>
<td>Minimum age:</td>
<td>
<input class="form-control" type="text" id="min" name="min">
</td>
</tr>
<tr>
<td>Maximum age:</td>
<td>
<input class="form-control" type="text" id="max" name="max">
</td>
</tr>
</tbody>
</table>
</div>
<div class="dt-responsive table-responsive">
<table id="dt-range" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
</tr>
<tr>
<td>Sonya Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
 </tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
</tr>
<tr>
<td>Michelle House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
</tr>
<tr>
<td>Gavin Cortez</td>
 <td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
</tr>
 <tr>
<td>Sakura Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
 <td>$103,500</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Live DOM Ordering</h5>
<span>This example shows how you can use information available in the DOM to order columns. Typically DataTables will read information to be ordered during it's initialisation phase, and this will not be updated based on user interaction, so ordering on columns which have, for example, form elements in them, may not reflect the current value of the input. To overcome this problem, you must update the data that DataTables will order on, just prior to the order. This method is much more efficient than actually ordering using the DOM, since only one DOM query is needed for each cell to be ordered.</span>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li>  <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="dt-live-dom" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>Position</th>
<th>Office</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger Nixon</td>
<td>
<input class="form-control" type="text" id="row-1-age" name="row-1-age" value="61">
</td>
<td>
<input class="form-control" type="text" id="row-1-position" name="row-1-position" value="System Architect">
</td>
<td>
<select class="form-control" size="1" id="row-1-office" name="row-1-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td>
<input class="form-control" type="text" id="row-2-age" name="row-2-age" value="63">
</td>
<td>
<input class="form-control" type="text" id="row-2-position" name="row-2-position" value="Accountant">
</td>
<td>
<select class="form-control" size="1" id="row-2-office" name="row-2-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo" selected="selected">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Ashton Cox</td>
<td>
<input class="form-control" type="text" id="row-3-age" name="row-3-age" value="66">
</td>
<td>
<input class="form-control" type="text" id="row-3-position" name="row-3-position" value="Junior Technical Author">
</td>
<td>
<select class="form-control" size="1" id="row-3-office" name="row-3-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Cedric Kelly</td>
<td>
<input class="form-control" type="text" id="row-4-age" name="row-4-age" value="22 ">
</td>
<td>
<input class="form-control " type="text" id="row-4-position" name="row-4-position" value="Senior Javascript Developer">
</td>
<td>
<select class="form-control" size="1" id="row-4-office" name="row-4-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Airi Satou</td>
<td>
<input class="form-control" type="text" id="row-5-age" name="row-5-age" value="33 ">
</td>
<td>
 <input class="form-control " type="text" id="row-5-position" name="row-5-position" value="Accountant">
</td>
<td>
<select class="form-control" size="1" id="row-5-office" name="row-5-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo" selected="selected">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Brielle Williamson</td>
<td>
<input class="form-control" type="text" id="row-6-age" name="row-6-age" value="61">
</td>
<td>
<input class="form-control " type="text" id="row-6-position" name="row-6-position" value="Integration Specialist">
</td>
<td>
<select class="form-control" size="1" id="row-6-office" name="row-6-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Herrod Chandler</td>
<td>
<input class="form-control" type="text" id="row-7-age" name="row-7-age" value="59 ">
</td>
<td>
<input class="form-control " type="text" id="row-7-position" name="row-7-position" value="Sales Assistant">
</td>
<td>
<select class="form-control" size="1" id="row-7-office" name="row-7-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Rhona Davidson</td>
<td>
<input class="form-control" type="text" id="row-8-age" name="row-8-age" value="55 ">
</td>
<td>
<input class="form-control " type="text" id="row-8-position" name="row-8-position" value="Integration Specialist">
</td>
<td>
<select class="form-control" size="1" id="row-8-office" name="row-8-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo" selected="selected">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Colleen Hurst</td>
<td>
<input class="form-control" type="text" id="row-9-age" name="row-9-age" value="39 ">
</td>
<td>
<input class="form-control " type="text" id="row-9-position" name="row-9-position" value="Javascript Developer">
</td>
<td>
<select class="form-control" size="1" id="row-9-office" name="row-9-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
 <tr>
<td>Sonya Frost</td>
<td>
<input class="form-control" type="text" id="row-10-age" name="row-10-age" value="23 ">
</td>
<td>
<input class="form-control " type="text" id="row-10-position" name="row-10-position" value="Software Engineer">
</td>
<td>
<select class="form-control" size="1" id="row-10-office" name="row-10-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Jena Gaines</td>
<td>
<input class="form-control" type="text" id="row-11-age" name="row-11-age" value="30 ">
</td>
<td>
<input class="form-control " type="text" id="row-11-position" name="row-11-position" value="Office Manager">
</td>
<td>
<select class="form-control" size="1" id="row-11-office" name="row-11-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Quinn Flynn</td>
<td>
<input class="form-control" type="text" id="row-12-age" name="row-12-age" value="22 ">
</td>
<td>
<input class="form-control " type="text" id="row-12-position" name="row-12-position" value="Support Lead">
</td>
<td>
<select class="form-control" size="1" id="row-12-office" name="row-12-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Charde Marshall</td>
<td>
<input class="form-control" type="text" id="row-13-age" name="row-13-age" value="36 ">
</td>
<td>
<input class="form-control" type="text" id="row-13-position" name="row-13-position" value="Regional Director">
</td>
<td>
<select class="form-control" size="1" id="row-13-office" name="row-13-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Haley Kennedy</td>
<td>
<input class="form-control" type="text" id="row-14-age" name="row-14-age" value="43 ">
</td>
<td>
<input class="form-control " type="text" id="row-14-position" name="row-14-position" value="Senior Marketing Designer">
</td>
<td>
<select class="form-control" size="1" id="row-14-office" name="row-14-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Tatyana Fitzpatrick</td>
<td>
<input class="form-control" type="text" id="row-15-age" name="row-15-age" value="19 ">
</td>
<td>
<input class="form-control " type="text" id="row-15-position" name="row-15-position" value="Regional Director">
</td>
<td>
<select class="form-control" size="1" id="row-15-office" name="row-15-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Michael Silva</td>
<td>
<input class="form-control" type="text" id="row-16-age" name="row-16-age" value="66 ">
</td>
<td>
<input class="form-control " type="text" id="row-16-position" name="row-16-position" value="Marketing Designer">
</td>
<td>
<select class="form-control" size="1" id="row-16-office" name="row-16-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Paul Byrd</td>
<td>
<input class="form-control" type="text" id="row-17-age" name="row-17-age" value="64 ">
</td>
 <td>
<input class="form-control " type="text" id="row-17-position" name="row-17-position" value="Chief Financial Officer (CFO)">
</td>
<td>
<select class="form-control" size="1" id="row-17-office" name="row-17-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Gloria Little</td>
<td>
<input class="form-control" type="text" id="row-18-age" name="row-18-age" value="59 ">
</td>
<td>
<input class="form-control " type="text" id="row-18-position" name="row-18-position" value="Systems Administrator">
</td>
<td>
<select class="form-control" size="1" id="row-18-office" name="row-18-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Bradley Greer</td>
<td>
<input class="form-control" type="text" id="row-19-age" name="row-19-age" value="41 ">
</td>
<td>
<input class="form-control " type="text" id="row-19-position" name="row-19-position" value="Software Engineer">
</td>
<td>
<select class="form-control" size="1" id="row-19-office" name="row-19-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
 London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Dai Rios</td>
<td>
<input class="form-control" type="text" id="row-20-age" name="row-20-age" value="35 ">
</td>
<td>
<input class="form-control " type="text" id="row-20-position" name="row-20-position" value="Personnel Lead">
</td>
<td>
<select class="form-control" size="1" id="row-20-office" name="row-20-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Jenette Caldwell</td>
<td>
<input class="form-control" type="text" id="row-21-age" name="row-21-age" value="30 ">
</td>
<td>
<input class="form-control " type="text" id="row-21-position" name="row-21-position" value="Development Lead">
</td>
<td>
<select class="form-control" size="1" id="row-21-office" name="row-21-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
 </td>
</tr>
<tr>
<td>Yuri Berry</td>
<td>
<input class="form-control" type="text" id="row-22-age" name="row-22-age" value="40 ">
</td>
<td>
<input class="form-control " type="text" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)">
</td>
<td>
<select class="form-control" size="1" id="row-22-office" name="row-22-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Caesar Vance</td>
<td>
<input class="form-control" type="text" id="row-23-age" name="row-23-age" value="21 ">
</td>
<td>
<input class="form-control " type="text" id="row-23-position" name="row-23-position" value="Pre-Sales Support">
</td>
<td>
<select class="form-control" size="1" id="row-23-office" name="row-23-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Doris Wilder</td>
<td>
<input class="form-control" type="text" id="row-24-age" name="row-24-age" value="23 ">
</td>
<td>
<input class="form-control " type="text" id="row-24-position" name="row-24-position" value="Sales Assistant">
</td>
<td>
 <select class="form-control" size="1" id="row-24-office" name="row-24-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Angelica Ramos</td>
<td>
<input class="form-control" type="text" id="row-25-age" name="row-25-age" value="47 ">
</td>
<td>
<input class="form-control " type="text" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)">
</td>
<td>
<select class="form-control" size="1" id="row-25-office" name="row-25-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Gavin Joyce</td>
<td>
<input class="form-control" type="text" id="row-26-age" name="row-26-age" value="42 ">
</td>
<td>
<input class="form-control " type="text" id="row-26-position" name="row-26-position" value="Developer">
</td>
<td>
<select class="form-control" size="1" id="row-26-office" name="row-26-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Jennifer Chang</td>
<td>
<input class="form-control" type="text" id="row-27-age" name="row-27-age" value="28 ">
</td>
<td>
<input class="form-control " type="text" id="row-27-position" name="row-27-position" value="Regional Director">
</td>
<td>
<select class="form-control" size="1" id="row-27-office" name="row-27-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Brenden Wagner</td>
<td>
<input class="form-control" type="text" id="row-28-age" name="row-28-age" value="28 ">
</td>
<td>
<input class="form-control " type="text" id="row-28-position" name="row-28-position" value="Software Engineer">
</td>
<td>
<select class="form-control" size="1" id="row-28-office" name="row-28-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Fiona Green</td>
<td>
<input class="form-control" type="text" id="row-29-age" name="row-29-age" value="48 ">
 </td>
<td>
<input class="form-control " type="text" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)">
</td>
<td>
<select class="form-control" size="1" id="row-29-office" name="row-29-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Shou Itou</td>
<td>
<input class="form-control" type="text" id="row-30-age" name="row-30-age" value="20 ">
</td>
<td>
<input class="form-control " type="text" id="row-30-position" name="row-30-position" value="Regional Marketing">
</td>
<td>
<select class="form-control" size="1" id="row-30-office" name="row-30-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo" selected="selected">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Michelle House</td>
<td>
<input class="form-control" type="text" id="row-31-age" name="row-31-age" value="37 ">
</td>
<td>
<input class="form-control " type="text" id="row-31-position" name="row-31-position" value="Integration Specialist">
</td>
<td>
<select class="form-control" size="1" id="row-31-office" name="row-31-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Suki Burks</td>
<td>
<input class="form-control" type="text" id="row-32-age" name="row-32-age" value="53 ">
</td>
<td>
<input class="form-control " type="text" id="row-32-position" name="row-32-position" value="Developer">
</td>
<td>
<select class="form-control" size="1" id="row-32-office" name="row-32-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Prescott Bartlett</td>
<td>
<input class="form-control" type="text" id="row-33-age" name="row-33-age" value="27 ">
</td>
<td>
<input class="form-control " type="text" id="row-33-position" name="row-33-position" value="Technical Author">
</td>
<td>
<select class="form-control" size="1" id="row-33-office" name="row-33-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Gavin Cortez</td>
<td>
<input class="form-control" type="text" id="row-34-age" name="row-34-age" value="22 ">
</td>
<td>
<input class="form-control " type="text" id="row-34-position" name="row-34-position" value="Team Leader">
</td>
<td>
<select class="form-control" size="1" id="row-34-office" name="row-34-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Martena Mccray</td>
<td>
<input class="form-control" type="text" id="row-35-age" name="row-35-age" value="46 ">
</td>
<td>
<input class="form-control " type="text" id="row-35-position" name="row-35-position" value="Post-Sales support">
</td>
<td>
<select class="form-control" size="1" id="row-35-office" name="row-35-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Unity Butler</td>
<td>
<input class="form-control" type="text" id="row-36-age" name="row-36-age" value="47 ">
</td>
<td>
<input class="form-control " type="text" id="row-36-position" name="row-36-position" value="Marketing Designer">
</td>
<td>
 <select class="form-control" size="1" id="row-36-office" name="row-36-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Howard Hatfield</td>
<td>
<input class="form-control" type="text" id="row-37-age" name="row-37-age" value="51 ">
</td>
<td>
<input class="form-control " type="text" id="row-37-position" name="row-37-position" value="Office Manager">
</td>
<td>
<select class="form-control" size="1" id="row-37-office" name="row-37-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Hope Fuentes</td>
<td>
<input class="form-control" type="text" id="row-38-age" name="row-38-age" value="41 ">
</td>
<td>
<input class="form-control " type="text" id="row-38-position" name="row-38-position" value="Secretary">
</td>
<td>
<select class="form-control" size="1" id="row-38-office" name="row-38-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Vivian Harrell</td>
<td>
<input class="form-control" type="text" id="row-39-age" name="row-39-age" value="62 ">
</td>
<td>
<input class="form-control " type="text" id="row-39-position" name="row-39-position" value="Financial Controller">
</td>
<td>
<select class="form-control" size="1" id="row-39-office" name="row-39-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Timothy Mooney</td>
<td>
<input class="form-control" type="text" id="row-40-age" name="row-40-age" value="37 ">
</td>
<td>
<input class="form-control " type="text" id="row-40-position" name="row-40-position" value="Office Manager">
</td>
<td>
<select class="form-control" size="1" id="row-40-office" name="row-40-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Jackson Bradshaw</td>
<td>
<input class="form-control" type="text" id="row-41-age" name="row-41-age" value="65 ">
</td>
<td>
<input class="form-control " type="text" id="row-41-position" name="row-41-position" value="Director">
</td>
<td>
<select class="form-control" size="1" id="row-41-office" name="row-41-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Olivia Liang</td>
<td>
<input class="form-control" type="text" id="row-42-age" name="row-42-age" value="64 ">
</td>
<td>
<input class="form-control " type="text" id="row-42-position" name="row-42-position" value="Support Engineer">
</td>
<td>
<select class="form-control" size="1" id="row-42-office" name="row-42-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Bruno Nash</td>
<td>
<input class="form-control" type="text" id="row-43-age" name="row-43-age" value="38 ">
</td>
<td>
<input class="form-control " type="text" id="row-43-position" name="row-43-position" value="Software Engineer">
</td>
<td>
<select class="form-control" size="1" id="row-43-office" name="row-43-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Sakura Yamamoto</td>
<td>
<input class="form-control" type="text" id="row-44-age" name="row-44-age" value="37 ">
</td>
<td>
<input class="form-control " type="text" id="row-44-position" name="row-44-position" value="Support Engineer">
</td>
<td>
<select class="form-control" size="1" id="row-44-office" name="row-44-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo" selected="selected">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Thor Walton</td>
<td>
<input class="form-control" type="text" id="row-45-age" name="row-45-age" value="61 ">
</td>
<td>
<input class="form-control " type="text" id="row-45-position" name="row-45-position" value="Developer">
</td>
<td>
<select class="form-control" size="1" id="row-45-office" name="row-45-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
 </select>
</td>
</tr>
<tr>
<td>Finn Camacho</td>
<td>
<input class="form-control" type="text" id="row-46-age" name="row-46-age" value="47 ">
</td>
<td>
<input class="form-control " type="text" id="row-46-position" name="row-46-position" value="Support Engineer">
</td>
<td>
<select class="form-control" size="1" id="row-46-office" name="row-46-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Serge Baldwin</td>
<td>
<input class="form-control" type="text" id="row-47-age" name="row-47-age" value="64 ">
</td>
<td>
<input class="form-control " type="text" id="row-47-position" name="row-47-position" value="Data Coordinator">
</td>
<td>
<select class="form-control" size="1" id="row-47-office" name="row-47-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Zenaida Frank</td>
<td>
<input class="form-control" type="text" id="row-48-age" name="row-48-age" value="63 ">
</td>
<td>
<input class="form-control " type="text" id="row-48-position" name="row-48-position" value="Software Engineer">
</td>
<td>
 <select class="form-control" size="1" id="row-48-office" name="row-48-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Zorita Serrano</td>
<td>
<input class="form-control" type="text" id="row-49-age" name="row-49-age" value="56 ">
</td>
<td>
<input class="form-control " type="text" id="row-49-position" name="row-49-position" value="Software Engineer">
</td>
<td>
<select class="form-control" size="1" id="row-49-office" name="row-49-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Jennifer Acosta</td>
<td>
<input class="form-control" type="text" id="row-50-age" name="row-50-age" value="43 ">
</td>
<td>
<input class="form-control " type="text" id="row-50-position" name="row-50-position" value="Junior Javascript Developer">
</td>
<td>
<select class="form-control" size="1" id="row-50-office" name="row-50-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
 <option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Cara Stevens</td>
<td>
<input class="form-control" type="text" id="row-51-age" name="row-51-age" value="46 ">
</td>
<td>
<input class="form-control " type="text" id="row-51-position" name="row-51-position" value="Sales Assistant">
</td>
<td>
<select class="form-control" size="1" id="row-51-office" name="row-51-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Hermione Butler</td>
<td>
<input class="form-control" type="text" id="row-52-age" name="row-52-age" value="47 ">
</td>
<td>
<input class="form-control " type="text" id="row-52-position" name="row-52-position" value="Regional Director">
</td>
<td>
<select class="form-control" size="1" id="row-52-office" name="row-52-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Lael Greer</td>
<td>
<input class="form-control" type="text" id="row-53-age" name="row-53-age" value="21 ">
</td>
<td>
<input class="form-control " type="text" id="row-53-position" name="row-53-position" value="Systems Administrator">
</td>
<td>
<select class="form-control" size="1" id="row-53-office" name="row-53-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London" selected="selected">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Jonas Alexander</td>
<td>
<input class="form-control" type="text" id="row-54-age" name="row-54-age" value="30 ">
</td>
<td>
<input class="form-control " type="text" id="row-54-position" name="row-54-position" value="Developer">
</td>
<td>
<select class="form-control" size="1" id="row-54-office" name="row-54-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco" selected="selected">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Shad Decker</td>
<td>
<input class="form-control" type="text" id="row-55-age" name="row-55-age" value="51 ">
</td>
<td>
<input class="form-control " type="text" id="row-55-position" name="row-55-position" value="Regional Director">
</td>
<td>
<select class="form-control" size="1" id="row-55-office" name="row-55-office">
<option value="Edinburgh" selected="selected">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Michael Bruce</td>
<td>
<input class="form-control" type="text" id="row-56-age" name="row-56-age" value="29 ">
</td>
<td>
<input class="form-control " type="text" id="row-56-position" name="row-56-position" value="Javascript Developer">
</td>
<td>
<select class="form-control" size="1" id="row-56-office" name="row-56-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
</select>
</td>
</tr>
<tr>
<td>Donna Snider</td>
<td>
<input class="form-control" type="text" id="row-57-age" name="row-57-age" value="27 ">
</td>
<td>
<input class="form-control " type="text" id="row-57-position" name="row-57-position" value="Customer Support">
</td>
<td>
<select class="form-control" size="1" id="row-57-office" name="row-57-office">
<option value="Edinburgh">
Edinburgh
</option>
<option value="London">
London
</option>
<option value="New York" selected="selected">
New York
</option>
<option value="San Francisco">
San Francisco
</option>
<option value="Tokyo">
Tokyo
</option>
 </select>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Age</th>
<th>Position</th>
<th>Office</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="../files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="../files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="../files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from colorlib.com//polygon/admindek/default/dt-plugin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:55:32 GMT -->
</html>