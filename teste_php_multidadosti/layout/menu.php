<!-- BEGIN SIDEBAR MENU -->
<ul class="page-sidebar-menu">
    <li class="sidebar-toggler-wrapper">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone">
        </div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search" action="extra_search.html" method="POST">
            <div class="form-container">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search...">
                    <input type="button" class="submit" value=" ">
                </div>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <?php
    $json = ('[        
       {
        "id": "9",
        "titulo": "Dashboard" ,
        "icon": "fa fa-home"        
        },
        {
            "id": "1",
            "titulo": "Cadastro",
            "icon": "fa fa-file-text",
            "subItens": [{
                    "id": "3",
                    "titulo": "Cliente"
                },
                {
                    "id": "4",
                    "titulo": "Fornecedor"
                },
                {
                   "id": "5",
                   "titulo": "Perfil de acesso"
               },
               {
                  "id": "10",
                  "titulo": "Produtos"
              },
              {
                 "id": "11",
                 "titulo": "Usuário"
             }
   
            ]
        }, {
           "id": "2",
           "titulo": "Relatório",
           "icon": "fa fa-bar-chart-o",
           "subItens": [{
                   "id": "6",
                   "titulo": "Cliente"
               },
               {
                   "id": "7",
                   "titulo": "Faturamento"
               },
               {
                   "id": "12",
                   "titulo": "Produtos"
               }
   
           ]
       },
       {
        "id": "8",
        "titulo": "FAQ" ,
        "icon": "fa fa-question-circle"        
        }
    ]');

    $obj = json_decode($json);

    foreach ($obj as $key => $item) {
        if (isset($item->subItens)) {
            echo '
            <li class="';
            if ($key === 0) {
                echo 'start active ';
            }
            echo '
            ">
            <a href="javascript:;">
                <i class="
                ' . $item->icon . '
                "></i>
                <span class="title">
                    ' . $item->titulo . '
                </span>
                <span class="arrow ">
                </span>
            </a>  
            <ul class="sub-menu">        
        ';
            foreach ($item->subItens as $subItens) {
                echo '
                
                <li>
                    <a href="#">
                    ' . $subItens->titulo . '
                    </a>
                </li>                           
                ';
            }
            echo '</ul>
            </li>
            ';
        } else {

            echo '
            <li class="';
            if ($key === 0) {
                echo 'start active ';
            }
            echo '
            ">
            <a href="index.html">
            <i class="
            ' . $item->icon . '
            "></i>
                <span class="title">
                ' . $item->titulo . '
                </span>
                <span class="selected">
                </span>
            </a>
        </li>';
        }
    }

    ?>
</ul>
<!-- END SIDEBAR MENU -->