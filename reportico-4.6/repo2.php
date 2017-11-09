<HTML>
    <BODY>

        ...... Your web content es historia ! ...... 

        <!-- Start of Reportico Report 
        "reportico-4.6/noadmin.php?execute_mode=EXECUTE&%20project=CNSM&xmlin=Mov_Barco_v2.xml"
        -->
        <?php
        
        require_once('reportico.php'); 
        
        $a = new reportico();
        $a->reportico_ajax_mode = true;
        $a->initial_project = "CNSM";
        $a->initial_project_password = "cdlr3314";
        $a->initial_report = "Mov_Barco_v2.xml";                                        
        $a->initial_execute_mode = "PREPARE";
        $a->access_mode = "ONEPROJECT";
        
        $a->reportico_ajax_mode = true;
        $a->initial_output_style = "FORM";
        $a->initial_show_detail = "show";
        $a->initial_show_graph = "show";
        $a->initial_show_group_headers = "show";
        $a->initial_show_group_trailers = "show";
        $a->initial_show_column_headers = "show";
        $a->initial_show_criteria = "show";

        
        $a->execute();
      ?> 
        <!-- End of Reportico Report -->
        ...... More web content ......

<!-- http://cnsm.org.ar/sistema/reportico-4.6/run.php?execute_mode=PREPARE&project=CNSM&project_password=cdlr3314&xmlin=Mov_Barco_v2.xml -->
       
    </BODY>
  </HTML>