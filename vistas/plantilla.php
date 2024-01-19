
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu de Inicio</title>
    <link rel="stylesheet" href="./assets/css/menu6.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>


    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Sistema Inventario</a>

                    
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        
                    
                    <img class="img-responsive img-rounded"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAACECAMAAACd4UQPAAAAz1BMVEX////u7u7t7e0yir4Rb5oyPELy8vL6+vrs7Oz+/v7z8/P39/cAAAAAaJYAbJgAapcNHSVBR0smMjkaJy4fhLucvtbJysoAYpItMTSur7AACxfExMQAEBoDFx8AXpAyNTeDhYYAfrl4qcy50OCSlZgfJCcNExa9x8zZ5e5moMfk6u+Hsc6QuNJLf6SlpqfT09PI1uDf4OCSsMY2eJ8AVotjZ2lRVFVWmMSqxtkOeq4keaY6hrNskrJyob93e35qcXV5lqmluMWDorpPjbFUXmNbextmAAAQPklEQVRogcVbi3biOrKVHceyJYzzIBjCaSDhEbfTgIGQ5mQgfQPz/990qyRLfmATSPquqzXTqWODtlXatVUqGUKwmQY0NFy0bLSooS28xoRlrxsXouFNk+M1biqL4TWqLENYNlquskw3B1aOa5bhPkrch4H9/4LbGGDXZ+EaX8PlJGJ5XDu0T8M1q3EdE5p8AtN0bPkEyqKOadPBz4fHLK5tOo3Gcwi48F1H4qJFlSWfwEZL4uJdBQFg+I/4bxc/YhQg0WLEHVwA3oPJiMYlZNC4aDz8Dkke0s5ZB+AKLBm/dnEJqU0a/WxIMvEsrjAbF7/ogYvN1MVlzi7DlS42srhcDBYxnmkGlyYR1fgdVeOWTvJp4+V3CcDFxe/seMOH5GrjIiLM1LjmZ+PN+NlwsYlRokEzFl+r/gEhyuCmj3PRCMU3KHwhoTJ+N7XsHIRB0Er5rCllakqBNUi7BzSucfnP9PoFuhqHqvlsakqZWUpJKw2eyvhlYaZ3nOAUt5G98TM/tSfHbxUu/5ntHiZY40YP2RuN9RHcIzrplOOyQQ724iLS+jzI4V40OCmQK8E1FVqK66STrIkEHLATSsEHaR4VCKTH+5x/osYvHKWdkstW5ILuqOrYSMDAqopfExeC4nAb62eF+/OicOswjnKDNk7RDWU9FnGfFe7d7yLuwP6OXhlqvIjLLort92OCcle803j8Aq5TwEVfAW74UOz9Qg2z6GZoUYmfzQK5MnplY5OUUhZFg7nkV+Ow98oGoiWIhN8ts/IQbjF+DTlUIc0lgzqCG/OSOGKaUifnOUb071m4a/539MqOD6f3GO4j/aZeST8T+6zpBcrFnJUGsVoX8npFocn5RktSCq7wx4vzYHEhvuM2x+449oIW5bpjpiwJVqFX9s9zUbE9rCvzjdP06sy51e0/9rfyHMMuKuSpA4658RW9MpPxRl9CRQHnZ+lVllJofRn3kWpKsbyVJxctj9/ooQFN9HRaUx/97VbG0Sm6wX7d3d09//v27x7+3v2CdqcMaaXX7p7Rfnv79z/w37/WlXp1qk4SPn+xvI2wwFtSyBnnTPTn4jX5XQ7NCOr1TXr35P1giV6BPgdWfQKfZPNZpz2dtjszByVB7MHIfPY0hWtPs7kB6jDoWt6WZvLY0/QqQymWsZZ1a/n0ft0ajWuijUe9P8PObNaZ/umNaupa6/p9tvOsIKZ5ldIWK1BK6pXeDx4m7/u6Zd2MWqPrfrvT6bTbw1VvNBrj/8atP0Nxbfp+jR9YWpY3Tyil94P55F0G7fH9oMxzBp4FuK3RH/SsyxinZH7dao1Grdb1nCTXXGM1at3AB73YVVP7rfyK0QkM1/uf13FTTLcpcsz2eDSdjq/aklEmqkBn/PoRWJa/IWfjHugVYoQw3Ho3HNayuLPayuWrWpMqXNPt1KZ86Vv1JSuh1Jl6hbQA3PokJIirqQK4Q8L7tTnV9EFcYsAEL6PPVSoFI3lKZeobiAu+m9Y6TJcd7E5t6OKjuLqq4bZrbRaBayaRebS+kePvwX7Q0HkO9GVZnAASrjGyjsSHtTYlbRi0ruK48BQMQ31flV+dmdfZwKsAtvL3PYfJbQtxnV5tzsm81rN13Ww+qtl8EKBuHMWt0isdukqvOIrBgIBXX2eUi16c1XjF4QngjwOzi9dm1+APtvXho4LeZ+oVg1awUPwgOFz6XhutpiBTT/3eGMbOqTsHo99pzprT1aj2DrwB13gRx69KSkGT9OHaYjmL5fXKydavYNIsK7YN3n4dJZr47ohCGZu/t6RMXr1iKKPCLKOS+lXGInlyHakjuaCTvmUipebN9nQ4bToqam3X6bSH03ZzjnMcwgN6i3Qp+kJelyN12LVg2iSVYZFjNlO4CZWBXWgtYLgB+0LdLNWr/GIIHXofEo06ZkJq7ihctNCTG2QVSynlVOuVqfWKaSJpiyeWC/MG4cH1tXKL+BBwvOqusvIQ1XoFq7hY+S0calqZxTKpsuSgjRjzgxyRvqBXuXqOCxPXDTN175yVOJvhbOxyU/uFureRxaWgB97C/QQX0hIv/hpuRZ3QjnHp5+k1/FzBzxTkpb50iUwrjtcJnUydkOtGk/9nLRhLd0B5pjH9J7FQxhckf7eqO66t4/V2ssCFxlUDlAcKKaXAYjEEuR8ZR+vtn+dXxbp3BLlOsM5NbaobaBkozTvXzE7t1/eDGpfhgJe8EpeiVnksv/SepFcVftbJO6aKuyylsn4WxIPZzWevpXls8VyDH290DaIfxG7FXdCVukVp+d1jrRBHOb2SFuSKVjfiOnqycbTB4ca2HP4JenVqvR2tCAhbXxZP7ERlbIcL1o7/jXO6lFLaQk/7E3aAy3e47mI69+VzyepzDWw75Ow+yuuVbaOT/YkIXZ6n1Hl6VUktd4vAyzD7WRpNENaKKhj3Ka+OxxEYHHLKn+DR+stCqZTB+V2AuycrYms1wDPj6LhuwCzGL+DhLTDICqwPPCiiPFx4mPMFe8icu+HB1H633o64bBB4WySXB+Ore95yv91bHi5TvreDjOvNr8dfwj3qZxIhp3wcUjxBzyJcHf/WvWVMTQ4yWffWlH7uZ1Lw85G5d92FhSPzNlhGcdeW51ui1b1g+cEg8bLR3VYwiem59CrEEdFDdbn98RZInCCWbh9svJdu9+VluRvAUgDRs5UPUu8ugXPcOCeOSC6UU72KdpZ0LPZruXJfxlkUx5GbpLqYaljaA/t1SO1v7QcZ4TAyT3Qo/w0WVIYVPBTXViQxfTlo3/M3sezv/PyKmDa3w8UkkH15/i6684SnBVp2XTDYRkz+IN57nvSMF0zu2DE/azBT5O1yqmVODaBd2U09CHYhLHE+RtDS4NnPAc8IyrPl74lLwoUVSMfUA38bc5cmn+P6G1xdAoyCXoH08o+3rnr2l+UHJ7hhGWD/3oQlG2OxO+Ei9cLroZz4eOd15Rf9rrUoiaNqvQKNUFTyA2sbkmRRotKfEzu3L1t05cQnE2ozHm8Sf9c9Kz5dr4izUcqw3MQyIAQujyy87ic7XMRlthytPzFSlXJJtJjIEK8HO1p5iER0wIqhG0tPPuw+NrmdWQwZiSWIJ6q8oJ0cxEt2Hxo6YMWT0sE+8LC9iAXyM72CeY8s8aQByB9N2SAb/ZCBGkwWIech9C2nIxgQRTNNHzJY7LaPj7vts3tArgwxVRyxveiqu8gNVVnuLkjkoRt0u0pPRGLNTdh9CydiGU1aLk0KMeJacgyGdzNxJE2+lko74Af5VZrTFJqAJdSeNZvNGbSmaMesGSnohokVGeDsBznM65I3Gz68eh62u5ZUWd2e3oYFXBmjuHtO61dp5V2WRMNldsiet5aLSv/28vQmaqyyfiUm2hXDDWIu6wKSTAWLQm7TlWuv3+3uIiLuGteXl1f3/2C7x3bcul8l3VG58IUigdiz0qQyFWQ33u19/22yiNO6yvXlFUxbeoRdYmUOuGGtzOgV3wrtx5fXxOfySXS6wWdiKbQZs/V+EHGbZ72PlNErjrCwJzjcNORwD0oMZbjl+VVyCpNJNRBC6JG3YGahfqVHiX5WFq/APVa/4k993d77soBPqbtDqQoiUWpKHidt7pHSFaUCl39S4iLDHzeZdj/kUq+EFL3JqXVeW71WL23XczdDLiNjid2JibjSi+iu0vyKOBBrKezl5e1MeBPrkOBmObh2bWi/j1fD8WruvI96o1H/aB0pi1u1LyNNwH1HD4sGgdcRnQiNlJkM4k7JsNaZ1/4w9t5q/x3cm8ueTRWlNO5GTC/P4LYcMnrtdP7bJyvAPVYnzOJW7bsFrqNDCHFtWCeiN6mR4hyHtGtt0h/N6egPIe9Ddzrup2c27ODwj0k+8/zpTfGQsANz6tBEqhC3iW9hJVFEZB0Ycd9HczZeIS6fX/b5uXFUPLdiiHuZ0gq/QQy5BHpxshS1xx0yfHXoa5+Q4dRtv/Z1wlxWv0pwK/ZlRgY30wQu3Yn8JkrWp3bvfdYf4tnufD6c9qer7+BmxnuD6yCO91biOvZe5MdgQQPccW06xlbrdGqj8bsaL95N8lhoybrgmAkuXkuIdGgJ3M4TNPynKXFde4lr0YbKQxbaHo/boxa0cbvzozXqv/Zd+TqWpoqbIY2b6lX6doxbOBp0gc8tW+4wYWFCPsNzi12Ot+BGEkcat9McS9wSkaZOSfxWkQvj6NJmKtOScSST1GBga9zWK8K2RqsV/tP7O7px2cEmsq1ENz4EbpjBVU0M+y/p1WWaZCW4W0lnmVomuD1YGgR0D3E1pQS5mLYKuBki5clFDuII/Ez3PtKZyZfu8CRdQ8pB96l+14/nLSRSRq+ounZglcWvLVRyT1WWIXBh/VPYozR+j+tV6atm1bphi8V3q+tIcn57ia97Wdxv6UYRN8LFCCvbGhcxhZd7/5e44qgm+EVSvWpJJ8vhatzv6tUBrgijNZdB7VI5v2KOE14lhENwA/ZWyelcYgk+y6QMhSFZCHKWLeIoz2cu30rB1FnHr0yvWtLRSfyauSS6GL9c7gfxRFtbMnMDyzZLcG0iyjXd2Na4NaUY8u/4U924nTaPtblRgsvEobHVDVXKbjir6+tXaNeigeF8hnt5++Og1Wr34u8/P2ptVoq7S3CdpMhhqne89Ckt/USvStrtsLNKsG5LcW2yqQtcUvzdBEstuEdSi4udjbKcMtwbyJGcG4VBSvVK4Za8d538LqZAqYP4/RS3NI4ELsZv1e9iilObx+XvZfvum9TPVbhib1Sf0C/iGuy/91eHrVb7R1l53JvbG4kr+GwFO1lckn52zPzvnkj1OSwo0rzZTBf1A6vjZHFv+p0/N6lO4jHNItJDLSNX3pLkkpadUYvEwrdt1DU7G78w8e6tiCP6Jus09cDaxkzoesnvByv1Kvu7Nr3wUa1XaX6V4l7J/GrQ9ZIajd+1tmt8vUdPaNmpYDVusgDNIF0VWeuTmclzZLsdPqGfxb4s3L7o2pTX9SaLUAVTGW71eNVC/+c+pZRYDLO6cXN1I3UDKy3u3STQ0HUv6O4Xg4hxjqsQzKqpxUNioGTkLLn24KSbIHbvCuWqczBedYPJn+IQLLN7+hwDD6isyXYRh5GBlXWi9KpIqQTStcPBbrf7gOeAp01x25xU5leG2pfSeDHxAzXXWB0Lut5yslkMwki+WpMeachFmNocrrH412YZBJ4f4BuU7vQ1VbDrlahIlu/L9H7Y4CwabOvdwM9UIus+uL2+XG52Cxh+GDHKTDuKojCM4/Vit9lMrK48QZNvbrZ/5HTryvkUVy13fLCbBHlwhPd9r4stEE2anu/X04/hS8vs8kdOt+77x3DxV1dKMgRHebjebZbgda9eqMKWN+Cit9yswfVCpmThV1hz5FsZbv6ng8oSYRHGi+1+CXMXeMUicHYevAA4uA4ZxwB287rBkdCuU8BN6kjlv2tDA8jKozBeP2/2b5Y4N/A99Qe87Plv+w0QLyro1cF7jNPbbN3sdshP+v2vjbU3cAVS6WNxt14PBoOnGFgmZgXC3CikzofndLOhKF0NsfU7EID/CyLv+SGNzP0NAAAAAElFTkSuQmCC"
                            alt="User picture">




                            
                    </div>
                    <div class="user-info">
                        <span class="user-name">Wilson
                            <strong>Mendez</strong>
                        </span>
                        <span class="user-role">Administrador</span>
                    </div>
                </div>




                <!-- sidebar-header  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Indice</span>
                        </li>
                        <li>
                            <a href="formularios.php?pagina=Limpiar">
                                <i class="fa fa-home"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        

                                
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-building"></i>
                                <span>Hardware</span>

                            </a>


                            
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                      <a href="formularios.php?pagina=CPU"><i  class="fa fa-laptop"></i>Crear CPU</a></li></a>
                                                                                                              
                                    </li>



                                    <li>
                                        <a href="formularios.php?pagina=Monitor"><i  class="fa fa-desktop"></i>Crear Monitor</a></li></a>
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=UPS"><i  class="fa fa-plug"></i>Crear UPS</a></li></a>
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=Accesorios"><i  class="fa fa-cubes"></i>Crear Accesorio</a></li></a>
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=Switcher"><i  class="fa fa-cubes"></i>Crear Switcher</a></li></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-cubes"></i>
                                <span>Software</span>

                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="formularios.php?pagina=Software"><i  class="fa fa-plus-circle"></i>Crear Software</a></li></a>
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=Licencia"><i  class="fa fa-plus-circle"></i>Crear Licencia</a></li></a>
                                    </li>
                                                                   
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-building"></i>
                                <span>Ubicacion</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="formularios.php?pagina=Ciudad"><i  class="fa fa-plus-circle"></i>Crear Ciudad</a></li></a>
                                                                               
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=Edificio"><i  class="fa fa-plus-circle"></i>Crear Edificio</a></li></a>
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=Depto"><i  class="fa fa-plus-circle"></i>Crear Departamento</a></li></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Colaboradores</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="formularios.php?pagina=Empleado"><i  class="fa fa-user-plus"></i>Crear Colaborador</a></li></a>
                                    </li>
                                  
                                    </li>
                                   </ul>
                            </div>
                        </li>
                        <li>
                        </li>


                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-credit-card"></i>
                                <span>Consultas</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="formularios.php?pagina=RolesCons"><i  class="fa fa-plus-circle"></i>Ver Hardware</a></li></a>
                                    <li>
                                        <a href="#"><i  class="fa fa-plus-circle"></i>Ver Software</a></li></a>
                                    </li>
                                    <li>
                                        <a href="#"><i  class="fa fa-plus-circle"></i>Ver Ubicaciones</a></li></a>

                                </ul>
                            </div>
                        </li>
                        <li>
                        </li>



                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-credit-card"></i>
                                <span>Reportes</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><i  class="fa fa-plus-circle"></i>Reporte Hardware</a></li></a>
                                    </li>
                                    <li>
                                        <a href="#"><i  class="fa fa-plus-circle"></i>Reporte Software</a></li></a>
                                    </li>
                                    <li>
                                        <a href="#"><i  class="fa fa-plus-circle"></i>Reporte Ubicaciones</a></li></a>
                                    </li>

                                    <li>
                                        <a href="#"><i  class="fa fa-plus-circle"></i>Rep. Colaboradores</a></li></a>
                                    </li>
                                    <li>
                                        <a href="#"><i  class="fa fa-plus-circle"></i>Rep. Mantenimientos</a></li></a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li>

                        </li>
                     
                       
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-wrench"></i>
                                <span>Registro Varios</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                             
  
                                <li>
                                        <a href="formularios.php?pagina=RAMTipo"><i  class="fa fa-plus-circle"></i>IP</a></li></a>
                                    </li>

                                <li>
                                        <a href="formularios.php?pagina=IP"><i  class="fa fa-plus-circle"></i>IP</a></li></a>
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=Procesador"><i  class="fa fa-plus-circle"></i>Procesador</a></li></a>
                                    </li>

                                    <li>
                                        <a href="formularios.php?pagina=Clasificacion"><i  class="fa fa-plus-circle"></i>Clasificacion</a></li></a>
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=RAM"><i  class="fa fa-plus-circle"></i>RAM</a></li></a>
                                    </li>
                                       <li>
                                        <a href="formularios.php?pagina=HDD"><i  class="fa fa-plus-circle"></i>Almacenamiento</a></li></a>
                                    </li>
                                    <li>
                                        <a href="formularios.php?pagina=Capacidad"><i  class="fa fa-plus-circle"></i>Capacidad</a></li></a>
                                    </li>                             
                                    <li>
                                    <a href="formularios.php?pagina=Marca"><i  class="fa fa-plus-circle"></i>Marca</a></li></a>
                                    </li>
                                    <li>
                                    <a href="formularios.php?pagina=Estado"><i  class="fa fa-plus-circle"></i>Estado del equipo</a></li></a>
                                    </li>
                                       <li>
                                        <a href="formularios.php?pagina=TVideo"><i  class="fa fa-plus-circle"></i>Tarjeta de Video</a></li></a>
                                    </li>
                                    <li>
                                        <a href="#"><i  class="fa fa-plus-circle"></i>Mantenimientos</a></li></a>
                                    </li>

                                  
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/inventarioeu/index.php">
                                <i class="fas fa-power-off"></i>
                                <span>Cerrar Sesion</span>
                            </a>
                        </li>
                </div>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <?php
                #ISSET: isset() Determina si una variable esta definida y no es NULL                
                if (isset($_GET["pagina"])) {

                    if (
                      
                        $_GET["pagina"] == "Roles" ||
                        $_GET["pagina"] == "Depto" ||
                        $_GET["pagina"] == "Ciudad" ||
                        $_GET["pagina"] == "Empleado" ||
                        $_GET["pagina"] == "Usuario" ||
                        $_GET["pagina"] == "Admin1" ||
                        $_GET["pagina"] == "Limpiar" ||
                        $_GET["pagina"] == "Marca" ||
                        $_GET["pagina"] == "Estado" ||
                        $_GET["pagina"] == "Tipo" ||
                        $_GET["pagina"] == "Validar" ||
                        $_GET["pagina"] == "RAM" ||
                        $_GET["pagina"] == "HDD" ||
                        $_GET["pagina"] == "TVideo" ||
                        $_GET["pagina"] == "UPS" ||
                        $_GET["pagina"] == "Accesorios" ||
                        $_GET["pagina"] == "Monitor" ||
                        $_GET["pagina"] == "Switcher" ||
                        $_GET["pagina"] == "Licencia" ||
                        $_GET["pagina"] == "Software" ||
                        $_GET["pagina"] == "Capacidad" ||
                        $_GET["pagina"] == "TipoDisco" ||
                        $_GET["pagina"] == "DiscoInst" ||
                        $_GET["pagina"] == "RAMTipo" ||
                        $_GET["pagina"] == "IP" ||
                        $_GET["pagina"] == "CPU" ||
                        $_GET["pagina"] == "Procesador" ||
                        $_GET["pagina"] == "Clasificacion" ||
                        $_GET["pagina"] == "RolesCons" ||
                        $_GET["pagina"] == "Edificio" 
                        
                    ) {

                        include "paginas/" . $_GET["pagina"] . ".php";

                    } else {
                        include "paginas/error404.php";

                    }
                } else {
                    include "paginas/error404.php";
                }
                ?>
                <!-- page-wrapper -->
            </div>
        </main>
        <!-- page-content" -->


  
     
            
       
   </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="./assets/js/menu6.js"></script>

    
</body>
</html>