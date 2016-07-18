<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['inicio'] = 'LoginController/index';
$route['checkuser'] = 'LoginController/checkuser';
$route['logout'] = 'LoginController/logout';

//DASHBOARD
$route['dashboard'] = 'AdminController/index';

//ADMINISTRACION DE USUARIOS 
$route['adm_usuarios'] = 'UserController/adm_Usuarios';
$route['adm_usuarios_form'] = 'UserController/adm_Usuarios_Form';
$route['adm_usuarios_form/(:num)'] = 'UserController/adm_Usuarios_Form_edit/$1';
$route['get_down_file/(:num)/(:any)'] = 'UserController/get_down_file/$1/$2';
$route['getxlsuarios'] = 'UserController/getxlsUsuarios';

//ADMINISTRACION DE USUARIOS AREA
$route['adm_usuarios_form_area'] = 'UserController/adm_Usuarios_Form_Area';
$route['adm_usuarios_form_area/(:num)'] = 'UserController/adm_Usuarios_Form_Area_edit/$1';

//ADMINSTRACION DE CATALOGOS:
$route['m50_1_catalogos'] = 'CatalogoController/m50_1_catalogos'; //DASHBOARD CATALOGOS
$route['m50_2_procesos'] = 'CatalogoController/m50_2_procesos';
$route['m50_3_alcances'] = 'CatalogoController/m50_3_alcances';
$route['m50_4_areas'] = 'CatalogoController/m50_4_areas';
$route['m50_5_cargo'] = 'CatalogoController/m50_5_cargo';
$route['m50_6_nivel'] = 'CatalogoController/m50_6_nivel';
$route['m50_7_estatus'] = 'CatalogoController/m50_7_estatus';
$route['m50_8_codigopuesto'] = 'CatalogoController/m50_8_codigopuesto';
$route['m50_9_intitucion'] = 'CatalogoController/m50_9_intitucion';
$route['m50_10_titulo'] = 'CatalogoController/m50_10_titulo';
$route['m50_11_documento'] = 'CatalogoController/m50_11_documento';
$route['m50_12_habilidad'] = 'CatalogoController/m50_12_habilidad';
$route['m50_13_Certificacion'] = 'CatalogoController/m50_13_Certificacion';
$route['m50_14_Curso'] = 'CatalogoController/m50_14_Curso';
$route['m50_15_CursoInstitucion'] = 'CatalogoController/m50_15_CursoInstitucion';
$route['m50_16_area'] = 'CatalogoController/m50_16_area';
$route['m50_17_subarea'] = 'CatalogoController/m50_17_subarea';
$route['m50_19_vicepresidencia'] = 'CatalogoController/m50_19_vicepresidencia';
$route['m50_18_dir_gen_adj'] = 'CatalogoController/m50_18_dir_gen_adj';
$route['direcciones_generales'] = 'CatalogoController/direcciones_generales';

//ADMINISTRACION DE BLOG
$route['blogAdmin'] = 'BlogController/adm_Blog';
//ADMINISTRACION DE PLANEACION ANUAL
//ADMINISTRACION DE PAT
$route['m1_0_pat'] = 'PatController/m1_0_pat';
$route['m1_0_0_form_nuevo_pat'] = 'PatController/m1_0_0_form_nuevo_pat';
$route['m1_0_0_form_pat/(:num)'] = 'PatController/m1_0_0_form_pat/$1';
$route['m1_0_0_form_pat_down_list/(:num)'] = 'PatController/m1_0_0_form_pat_down_list/$1';
$route['m1_0_0_form_pat_agregar_revision/(:num)'] = 'PatController/m1_0_0_form_pat_agregar_revision/$1';
$route['m1_0_0_form_pat_editar_revision/(:num)/(:num)'] = 'PatController/m1_0_0_form_pat_editar_revision/$1/$2';
//ADMINISTRACION DE PRESENTACION EJECUTIVA
$route['m1_3_presentacion_ejecutiva'] = 'PatController/m1_3_presentacion_ejecutiva';
$route['m1_3_presentacion_ejecutiva_form'] = 'PatController/m1_3_presentacion_ejecutiva_form';
$route['get_down_file_planeacion_ejecutiva/(:num)'] = 'PatController/get_down_file/$1';
$route['m1_3_presentacion_ejecutiva_down_list'] = 'PatController/m1_3_presentacion_ejecutiva_down_list';
//ADMINISTRACION DE MAPA DE RIESGOS

$route['m1_4_mapa_riesgos_index'] = 'PatController/m1_4_mapa_riesgos_index';
$route['m1_4_mapa_riesgos/(:num)'] = 'PatController/m1_4_mapa_riesgos/$1';
$route['m1_4_mapa_riesgos_form/(:num)'] = 'PatController/m1_4_mapa_riesgos_form/$1';

//MAPA DE RIESGOS
//$route['mapa_riesgos']          = 'MapaRiesgosController/index';
//$route['mapa_riesgos_form']          = 'MapaRiesgosController/form';
//$route['mapa_riesgos_form_ide/(:num)']     = 'MapaRiesgosController/get_riesgo_id/$1';
//ADMINISTRACION DE SEMANAS HOMBRE
$route['m1_5_semanas_hombre'] = 'PatController/m1_5_semanas_hombre';
$route['m1_5_semanas_hombre_form'] = 'PatController/m1_5_semanas_hombre_form';
//ADMINISTRACION DE EQUIPO DE TRABAJO
$route['m1_6_equipo_trabajo/(:num)'] = 'PatController/m1_6_equipo_trabajo/$1';
$route['down_list_m1_6_equipo_trabajo/(:num)'] = 'PatController/down_list_m1_6_equipo_trabajo/$1';
$route['m1_6_0_form_equipo_trabajo/(:num)'] = 'PatController/m1_6_0_form_equipo_trabajo/$1';


/*** INICIO sconsa***/

//AUDITORIA
    //Planeación detallada
$route['acta_inicio']		= 'AuditoriaController/get_acta_inicio';
$route['carta_planeacion/(:num)']	        = 'CartaPlaneacionController/get_lista_revisiones/$1';
$route['carta_planeacion_detalle/(:num)']	= 'CartaPlaneacionController/get_carta_planeacion_detalle/$1';

        //Cronograma
$route['cronograma']				= 'CronogramaController/get_cronograma';
$route['orden_auditoria']	= 'AuditoriaController/get_orden_auditoria';
$route['orden_auditoria_detallada/(:num)']	= 'AuditoriaController/get_orden_auditoria_detalle/$1';
$route['programa_trabajo']	= 'AuditoriaController/get_programa_trabajo';
        //Oficio complementario
$route['ampliacion']			= 'OficiocomplementarioController/get_ampliacion';
$route['desincorporacion']		= 'OficiocomplementarioController/get_desincorporacion';
$route['oficio_complementario']	= 'OficiocomplementarioController/get_oficio_complementario';
$route['oficio_complementario_detalle/(:num)']	= 'OficiocomplementarioController/get_oficio_complementario_detalle/$1';
$route['oficio_general']		= 'OficioGneralController/get_oficio_general';
$route['oficio_general_detalle/(:num)']	= 'OficioGneralController/get_oficio_general_detalle/$1';
$route['sustitucion']			= 'OficiocomplementarioController/get_sustitucion';
    //Ejecución
$route['acta_administrativa']			= 'EjecucionController/get_acta_administrativa';
$route['cedula_control_interno']		= 'EjecucionController/get_cedula_control_interno';
$route['cedula_hallazgo']				= 'EjecucionController/get_cedula_hallazgo';
$route['cedula_observaciones']			= 'EjecucionController/get_cedula_observaciones';
$route['cedula_resumen_actividades']	= 'EjecucionController/get_cedula_resumen_actividades';
$route['cedula_trabajo']				= 'EjecucionController/get_cedula_trabajo';
$route['requerimiento_informacion_1']	= 'EjecucionController/get_requerimiento_informacion_1';
$route['requerimiento_informacion_2']	= 'EjecucionController/get_requerimiento_informacion_2';
    //Cierre
$route['cedula_supervision_auditoria']	= 'CierreController/get_cedula_supervision_auditoria';
$route['cedula_unica_auditoria']		= 'CierreController/get_cedula_unica_auditoria';
$route['cierre_informe_auditoria']		= 'CierreController/get_cierre_informe_auditoria';
//$route['indice_legajo_auditoria']		= 'CierreController/get_indice_legajo_auditoria';
$route['memorandum_area_oportunidad']	= 'CierreController/get_memorandum_area_oportunidad';
$route['oficio_informe_presidente']		= 'CierreController/get_oficio_informe_presidente';

//SEGUIMIENTO
$route['cedula_seguimiento']				= 'SeguimientoController/get_cedula_seguimiento';
$route['cedula_supervision_seguimiento']	= 'SeguimientoController/get_cedula_supervision_seguimiento';
$route['cedula_unica_seguimiento']			= 'SeguimientoController/get_cedula_unica_seguimiento';
//$route['contraportada']					= 'SeguimientoController/get_contraportada';
$route['indice_legajo']						= 'SeguimientoController/get_indice_legajo';
$route['informe_seguimiento']				= 'SeguimientoController/get_informe_seguimiento';
//$route['portada']							= 'SeguimientoController/get_portada';
$route['requerimiento_informacion']			= 'SeguimientoController/get_requerimiento_informacion';

//PRA
$route['anexos']											= 'PraController/get_anexos';
$route['anexos_detalle/(:num)']								= 'PraController/get_detalle/$1';
$route['informe_presunta_responsabilidad']					= 'PraController/get_informe_presunta_responsabilidad';
$route['informe_presunta_responsabilidad_detalle/(:num)']	= 'PraController/get_informe_presunta_responsabilidad_detalle/$1';
$route['solicitud_asesoria_no_vinculante']					= 'PraController/get_solicitud_asesoria_no_vinculante';
$route['solicitud_asesoria_no_vinculante_detalle/(:num)']	= 'PraController/get_solicitud_asesoria_no_vinculante_detalle/$1';
$route['solicitud_informacion']								= 'PraController/get_solicitud_informacion';
$route['solicitud_informacion_detalle/(:num)']				= 'PraController/get_solicitud_informacion_detalle/$1';

/*** FIN sconsa***/




//OTRAS ACTIVIDADES
$route['adquisiciones'] = 'AdquisicionController/m8_1_adquisiciones';



//EXTRAS
//NORMATIVA/AAI
$route['aai']               = 'AaiController/lista_AAI';
$route['aai_form']          = 'AaiController/form_AAI';
//NORMATIVA/CNBV
$route['cnbv']              = 'CnbvController/lista_CNBV';
$route['cnbv_form']         = 'CnbvController/form_CNBV';
//NORMATIVA/PLANTILLAS
$route['plantillas']        = 'PlantillasController/lista_Plantilla';
$route['plantillas_form']   = 'PlantillasController/form_Plantilla';
//NORMATIVA/GLOSARIO
$route['glosario']          = 'GlosarioController/lista_Glosario';
$route['glosario_form']     = 'GlosarioController/form_Glosario';

//BLOG sconsa
$route['blog']             = 'BlogvistaController/lista';
$route['blog_detalle/(:num)']      = 'BlogdetalleController/blog_detalle/$1';




//CODIGO BORRADOR

/*
$route['updateUserData'] = 'AdminController/updateUserData';
$route['edituser/(:num)'] = 'AdminController/edituser/$1';
$route['deleteuser/(:num)'] = 'AdminController/deleteuser/$1';
*/
