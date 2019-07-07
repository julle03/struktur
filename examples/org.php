<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="../orgchart/orgchart.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      //create a tree
      $("#tree-data").jOrgChart({
        chartElement: $("#tree-view"),
        nodeClicked: nodeClicked
      });

      //Lighting a node in the selection
      function nodeClicked(node, type){
        node=node || $(this);
        $('.jOrgChart .selected').removeClass("selected");
        node.addClass('selected');
      }
    });
  </script>
<style>
    table {/* reset width */
      width: auto;
      font-weight: bold;
    }

    /* Horizontal drawing (default) styles */

    /* Draw the lines */
    .jOrgChart .line {
      height: 10px;
      width: 2px;
    }

    .jOrgChart .down {
      background-color: black;
      margin: 2px auto;
    }

    .jOrgChart .top {

      border-top: 2px solid black;
    }

    .jOrgChart .left {
      border-right: 2px solid white;
    }

    .jOrgChart .right {
      border-left: 2px solid black;
    }

    /* node cell */
    .jOrgChart td {
      text-align: center;
      vertical-align: top;
      padding: 0;
    }

    /* The node */

    .jOrgChart .node.selected {
      background-image:url("images/back_box.png"); !important;
      border: 1px dotted black;
    }

    .jOrgChart .node {
      border: solid 2px grey;
      background-color:#cce0ff;
      background-size: cover;
      display: inline-block;
      width: 150px; 		/* vertical type node width */
      min-height: 60px;	/* vertical type node min-height */
      z-index: 10;
      margin: 0 2px;
      border-radius: 10px;
      padding:5px;
      cursor: pointer;
    }

    .jOrgChart .node:hover {
      background-image:url("images/back_box.png");
      cursor: pointer;
      background-size: cover;
      border:2px solid black;
    }

    /* support vertical draw child nodes */
    .jOrgChart .node.vertical {
      float: left;
    }

    .jOrgChart .cover {
      position: absolute;
      cursor: pointer;
      margin-top: -6px;
      margin-left: -5px;
    }

    /* Vertical drawing styles */

    .jOrgChart .multi-tree {
      margin: 0;
      float: left;
    }

    .jOrgChart .multi-tree .content {
      color: black;
      background-color: white;
      text-decoration: none;
      border: 1px solid black;
      width: 100px;		/* horizontal type node width */
      min-height: 60px;	/* horizontal type node min-height */
      cursor: pointer;
    }

    .jOrgChart .multi-tree .selected {
      background-color: #3399FF !important;
      border: 1px dotted black;
    }

    .jOrgChart .multi-tree span {
      width: 109px;
      text-decoration: none;
      display: block;
      margin: 0 0 0 1.2em;
      padding-top: 10px;
      background-color: transparent;
      border: solid black;
      border-width: 0 0 1px 1px;
    }

    .jOrgChart .multi-tree span .content  {
      display: block;
      position: relative;
      top: .95em;
      background-color: #fff;
      margin: 0 0 .2em .7em;
      padding: 0;
    }

    .jOrgChart .multi-tree ul, .multi-tree li {
      list-style-image: none;
      list-style-position: outside;
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    .jOrgChart .multi-tree ul li {
      line-height: 1.2em;
    }

    .jOrgChart .multi-tree ul li ul li {
      margin: 0 0 0 1.2em;
      border-left: 1px solid black; /* vertical node connector line */
    }

    /* if node is last then need to remove left connector */
    .jOrgChart .multi-tree li.last ul li {
      border: none;
    }

</style>
  <style>
    body{
      background-image: url("images/background.jpg");
      background-size: cover;
    }
    .container{
      max-width:960px;
      margin:100px auto;
      margin-left: 20px;
    }
    .judul{
      width:140px;
      border:2px solid red;
    }
    .klik{
      font-size: 18px;
      text-decoration: none;
      color: black;
    }
  </style>
  </head>
  <body>

    <?php include "dt_struktur.php"; ?>

    <div class="container">
      <ul id="tree-data" style="display:none">
        <li id="root">
          <a class="klik" target='_blank' href='cetak_user.php?id=<?php echo $id1;?>'><?php echo $nama1;?></a><br>
          <hr class="judul">Operation Head<br><p>
          <ul>
            <li id="node1">
              <a class="klik" target='_blank' href='cetak_user.php?id=<?php echo $id2;?>'><?php echo $nama2;?></a>
              <br><hr class="judul"><br>Spv Rec. Sto. & Dist<p>
            <ul>
              <li id="node4">Nama<br><hr class="judul"><br>Nama Pegawai 1.1<p>
                <ul>
                  <li id="node8">Nama<br><hr class="judul"><br>Nama Pegawai 1.1.1<p></li>
                  <li id="node9">Nama<br><hr class="judul"><br>Nama Pegawai 1.1.2<p></li>
                  <li id="node10">Nama<br><hr class="judul"><br>Nama Pegawai 1.1.3<p></li>
                  <li id="node11">Nama<br><hr class="judul"><br>Nama Pegawai 1.1.4<p></li>
                  <li id="node12">Nama<br><hr class="judul"><br>Nama Pegawai 1.1.5<p></li>
                  <li id="node13">Nama<br><hr class="judul"><br>Nama Pegawai 1.1.6<p></li>
                  <li id="node14">Nama<br><hr class="judul"><br>Nama Pegawai 1.1.7<p></li>
                </ul>
              </li>
            </ul>
            </li>
            <li id="node2">Nama<br><hr class="judul"><br>Nama Pegawai 2<p>
              <ul>
                <li id="node5">Nama<br><hr class="judul"><br>Nama Pegawai 2.1<p></li>
              </ul>
            </li>
            <li id="node3">Nama<br><hr class="judul"><br>Nama Pegawai 3<p>
              <ul>
                <li id="node6">Nama<br><hr class="judul"><br>Nama Pegawai 3.1<p></li>
                <li id="node7">Nama<br><hr class="judul"><br>Nama Pegawai 3.2<p></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <div id="tree-view">
      </div>
    </div>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jQueryScript.Net']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>

  </body>
</html>
