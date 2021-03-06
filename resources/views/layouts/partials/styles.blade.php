      .content-top {
        background: #1ba1e2;
        color: #fff;
        line-height: 30px;
        margin-bottom:10px;
      }  
			.recent-additions {
				width: 150px;
			  white-space: nowrap;
			  overflow: hidden;
			  text-overflow: ellipsis;
			}

			header .logo h1 {
	    	font-size: 30px;
	    	line-height: 45px;
	    	margin-bottom: 5px;
			}

      h1{
        font-family: 'Cutive', sans-serif;
        Padding:5px;
      }

      header .logo h1 {
        font-size: 26px;
      }

      p{
        font-family: 'Cutive', sans-serif;
        padding-top: 5px;
      }

			form {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
        display: block;
        line-height: normal;
        color: #333;
      }
      .search_box {
        margin: 0px 0 0 0;
        padding: 0 0 0 0;
        position: relative;
        height: 45px;
      }
      #q {
        width: 200px;
        display: block;
        border: 1px solid #cfcfcf;
        color: #000;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        -webkit-appearance: none;
        padding: 10px 13px 10px 13px;
        line-height: 23px;
        float: left;
        font-size: 1em;
        background-color: white;
        -webkit-rtl-ordering: logical;
        -webkit-user-select: text;
        cursor: auto;
        margin: 0em;
        border-radius: 4px 0px 0px 4px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 300;
      }
      ::-webkit-input-placeholder { color: #9f9f9f; }
      :-moz-placeholder { color: #9f9f9f; }
      ::-moz-placeholder { color: #9f9f9f;}
      :-ms-input-placeholder {color: #9f9f9f;}

      .search_box #q:focus {
        outline-width: 0px;
        border: 1px solid #999;
      }
      .search_box #q:hover {
        border: 1px solid #999;
      }
      .search_box_shadow {
        -webkit-box-shadow: 0px 0px 2px 0px #2E61E4;
          -moz-box-shadow: 0px 0px 2px 0px #2E61E4;
          box-shadow: 0px 0px 2px 0px #2E61E4;
      }

      .search_box .searchbutton {
        cursor: pointer;
        display: inline-block;
        padding: 0px;
        width: 56px;
        height: 43px;
        margin: 0px 0 0 -1px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        background-color: #FFFFFF;
        border: 1px solid #2182CD;
        text-align: center;
        color: #5588AA;
      }

      [class^="icon-"], [class*=" icon-"] {
          display:inline-block;
          margin-top: 10px;
          vertical-align: middle;
      }

      .search_box .searchbutton:hover {
        background-color: white;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #9ad9ff));
        background-image: -webkit-linear-gradient(top, white, #9ad9ff);
        background-image: linear-gradient(to bottom,white, #9ad9ff);
        box-shadow: inset 0 1px 0 #75C5E1
      }
      body {
        background-color: #ffffff;
      }

      .panel {
          width: 500px;
        margin-top: 10px;
        margin-left:auto;
        margin-right:auto;
          border: 1px solid #dddddd;
          border-radius: 4px;
          -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
      }
      .panel-heading {
        padding: 10px 15px;
        font-size: 1em;
        background-color: #00B3FF;
        border-bottom: 1px solid #dddddd;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px;
      }
      .bg {
        background-color: #f3f3f3;
      }
      #hits {
        padding:5px 0px;
      }
      .hit {
        cursor: pointer;
        padding: 5px 15px;
      }
      .hit:hover {
        background-color: #f5f5f5;
      }
      .refined {
        font-weight: bold;
      }
      .excluded {
        text-decoration: line-through;
      }
      em {
        font-style: normal;
        font-weight: bold;
      }
      .grey {
        display: inline;
        color: #888;
      }
      body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 300;
      }

      @media (max-width: 500px) {
        body {
          margin: 0px;
        }
        .panel {
          margin-top: 0px;
          width: 100%;
        }
        #q {
          width: -moz-calc(100% - 60px);
            width: -webkit-calc(100% - 60px);
            width: calc(100% - 60px);
        }
      }

      #fixedbutton {
        position: fixed;
        bottom: 10px;
        right: 10px; 
        z-index: 1000
      }

      #pagination { position: fixed; bottom: 10px; left: 10px; z-index: 1000}
     