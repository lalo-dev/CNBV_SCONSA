        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="side-header side-content bg-white-op">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times"></i>
                        </button>
                        
                        <a class="h5 text-white" href="dashboard">
                            <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">PAKAL AI</span>
                        </a>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content">
                        <ul class="nav-main">
                            <li>
                                <a class="active submenuCnbv" href="dashboard">
                                    <i class="si si-speedometer"></i>
                                    <span class="sidebar-mini-hide">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-hide">Actividades</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Planeación anual</span></a>
                                <ul>
                                    <li>
                                        <a class="submenuCnbv" href="<?=URL ?>m1_0_pat">PAT</a>
                                    </li>
                                    <li>
                                        <a class="submenuCnbv" href="<?=URL ?>m1_3_presentacion_ejecutiva">Presentación ejecutiva</a>
                                    </li>
                                    <li>
                                        <a class="submenuCnbv" href="<?=URL ?>m1_4_mapa_riesgos">Mapa de riesgos</a>
                                    </li>
                                    <li>
                                        <a class="submenuCnbv" href="<?=URL ?>m1_5_semanas_hombre">Semanas hombre</a>
                                    </li>
                                    <li>    <?php $pat_ano = $this->session->userdata("pat_ano"); ?>
                                        <a class="submenuCnbv" href="<?=URL ?>m1_6_equipo_trabajo/<?=$pat_ano ?>">Equipo de trabajo</a>
                                    </li> 
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Auditoría</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Planeación detallada</a>
                                        <ul>
                                            <li>
                                                <a href="carta_planeacion/<?=$pat_ano ?>">Carta de planeación</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'programa_trabajo'; ?>">Programa de trabajo</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'cronograma'; ?>">Cronograma</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'orden_auditoria'; ?>">Orden de auditoría</a>
                                            </li>
                                            <li class="">
                                                <a class="nav-submenu" data-toggle="nav-submenu">Oficio complementario</a>
                                                <ul>
                                                    <li>
                                                        <a href="<?= URL.'oficio_complementario'; ?>">Modificaci&oacute;n</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= URL.'oficio_general'; ?>">Oficio General</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= URL.'sustitucion'; ?>">Sustituci&oacute;n</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= URL.'ampliacion'; ?>">Ampliaci&oacute;n</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= URL.'desincorporacion'; ?>">Desincorporaci&oacute;n</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'acta_inicio'; ?>">Acta de inicio</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-submenu" data-toggle="nav-submenu">Ejecución</a>
                                        <ul>
                                            <li>
                                                <a href="<?= URL.'requerimiento_informacion_1'; ?>">Requerimiento informaci&oacute;n 1</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'requerimiento_informacion_2'; ?>">Requerimiento informaci&oacute;n 2</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'cedula_trabajo'; ?>">C&eacute;dula de trabajo</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'cedula_hallazgo'; ?>">C&eacute;dula de hallazgos</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'cedula_resumen_actividades'; ?>">C&eacute;dula Resumen de actividades</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'cedula_control_interno'; ?>">C&eacute;dula de control interno</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'cedula_observaciones'; ?>">C&eacute;dula de observaciones</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'acta_administrativa'; ?>">Acta Administrativa</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-submenu" data-toggle="nav-submenu">Cierre</a>
                                        <ul>
                                            <li>
                                                <a href="<?= URL.'cierre_informe_auditoria'; ?>">Informe de Auditoría</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'oficio_informe_presidente'; ?>">Oficio de envío del Informe para el Presidente</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'memorandum_area_oportunidad'; ?>">Memorándum de Áreas de Oportunidad</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'cedula_unica_auditoria'; ?>">Cédula Única de Auditoría</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'cedula_supervision_auditoria'; ?>">Cédula de Supervisión de Auditoría</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'indice_legajo_auditoria'; ?>">Índice del Legajo de Auditoría</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'portada'; ?>">Portada</a>
                                            </li>
                                            <li>
                                                <a href="<?= URL.'contraportada'; ?>">Contraportada</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Seguimiento</span></a>
                                <ul>
                                    <li>
                                        <a href="<?= URL.'cedula_seguimiento'; ?>">Cédula de Seguimiento de Observaciones</a>
                                        <a href="<?= URL.'requerimiento_informacion'; ?>">Requerimiento de Información</a>
                                        <a href="<?= URL.'informe_seguimiento'; ?>">Informes de Seguimiento</a>
                                        <a href="<?= URL.'cedula_supervision_seguimiento'; ?>">Cédula de Supervisión de Seguimiento</a>
                                        <a href="<?= URL.'cedula_unica_seguimiento'; ?>">Cédula Única de Seguimiento</a>
                                        <a href="<?= URL.'indice_legajo'; ?>">Índice del Legajo de Seguimiento</a>
                                        <a href="<?= URL.'portada'; ?>">Portada</a>
                                        <a href="<?= URL.'contraportada'; ?>">Contraportada</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">PRA</span></a>
                                <ul>
                                    <li>
                                        <a href="<?= URL.'solicitud_asesoria_no_vinculante'; ?>">Solicitud de asesoría no vinculante</a>
                                    </li>
                                    <li>
                                        <a href="<?= URL.'informe_presunta_responsabilidad'; ?>">Informe de Presunta Responsabilidad</a>
                                    </li>
                                    <li>
                                        <a href="<?= URL.'solicitud_informacion'; ?>">Solicitud de información</a>
                                    </li>
                                    <li>
                                        <a href="<?= URL.'anexos'; ?>">Anexos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-calendar"></i><span class="sidebar-mini-hide">Actividades</span></a>
                                <ul>
                                    <li>
                                        <a href="registro_actividades">Registrar</a>
                                    </li>
                                    <li>
                                        <a href="consultar_actividades">Consultar</a>
                                    </li>
                                    <li>
                                        <a href="actividades_generales">General</a>
                                    </li>
                                    <li>
                                        <a href="configurar_actividades">Configuración</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-hide">Actividades adicionales</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-docs"></i><span class="sidebar-mini-hide">Normativa</span></a>
                                <ul>
                                    <li>
                                        <a href="aai">AAI</a>
                                    </li>
                                    <li>
                                        <a href="cnbv">CNBV</a>
                                    </li>
                                    <li>
                                        <a href="plantillas">Plantillas</a>
                                    </li>
                                    <li>
                                        <a href="glosario">Glosario</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-docs"></i><span class="sidebar-mini-hide">Otras actividades</span></a>
                                <ul>
                                    <li>
                                        <a href="<?= URL.'adquisiciones'; ?>">Adquisiciones</a>
                                    </li>
                                    <li>
                                        <a href="m8_2_comsoc">COMSOC</a>
                                    </li>
                                    <li>
                                        <a href="m8_3_actas_entrega">Actas de entrega</a>
                                    </li>
                                    <li>
                                        <a href="m8_4_auditores_externos">Auditores externos</a>
                                    </li>
                                    <li>
                                        <a href="m8_5_asf">ASF</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= URL.'blog'; ?>">
                                    <i class="si si-notebook"></i><span class="sidebar-mini-hide">Blog</span>
                                </a>
                            </li>
                            <?php if (trim($this->session->userdata('rol') ) == 'Administrador'): ?>
                                <li class="nav-main-heading"><span class="sidebar-mini-hide">Administración</span></li>
                                <li>
                                    <a href="<?= URL. 'adm_usuarios' ?>"><i class="si si-users"></i><span class="sidebar-mini-hide">Usuarios</span></a>
                                </li>
                                <li>
                                    <a href="<?=URL. 'm50_1_catalogos'; ?>">
                                        <i class="si si-list"></i><span class="sidebar-mini-hide">Catálogos</span>
                                    </a>
                                </li>                            
                                <li> 
                                    <a href="<?= URL.'blogAdmin'; ?>"><i class="si si-speech"></i><span class="sidebar-mini-hide">Blog</span></a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bar-chart"></i><span class="sidebar-mini-hide">Reportes</span></a>
                                    <ul>
                                        <li>
                                            <a href="#">Reporte avance semanal auditoría</a>
                                        </li>
                                        <li>
                                            <a href="#">Reportes adicionales</a>
                                        </li>
                                        <li>
                                            <a href="#">Reportes AAI</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bar-chart"></i><span class="sidebar-mini-hide">Estadísticas</span></a>
                                    <ul>
                                        <li>
                                            <a href="m6_1_estadistica_auditorias">Auditorías</a>
                                        </li>
                                        <li>
                                            <a href="">Seguimientos</a>
                                        </li>
                                        <li>
                                            <a href="">Auditores</a>
                                        </li>
                                        <li>
                                            <a href="">PRAS</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- Sidebar Content -->
            </div>
            <!-- END Sidebar Scroll Container -->
        </nav>
        <script>
            //Mostrar que link del menu esta activo
            $('.submenuCnbv').on('click',function(){
                //alert('menu');
                $('.nav-main').find('li, a').removeClass('active');
                $('.nav-main').find('ul').css({ display: 'none' });
                $(this).addClass('active');
                $(this).parent().parent().parent().addClass('active');
                $(this).parent().parent().css({ display: 'block' });
            });
        </script>