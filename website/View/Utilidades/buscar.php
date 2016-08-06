<h1>Buscador datos contribuyente</h1>
<?php
$f = new \sowerphp\general\View_Helper_Form();
echo $f->begin(['focus'=>'rutField', 'onsubmit'=>'Form.check()']);
echo $f->input([
    'name' => 'rut',
    'label' => 'RUT',
    'check' => 'notempty rut',
]);
if (isset($Contribuyente)) {
    echo $f->input(['type'=>'div', 'label'=>'Razón social', 'value'=>$Contribuyente->razon_social]);
    echo $f->input(['type'=>'div', 'label'=>'Giro', 'value'=>$Contribuyente->giro]);
    echo $f->input(['type'=>'div', 'label'=>'Actividad económica', 'value'=>$Contribuyente->getActividadEconomica()->actividad_economica.' ('.$Contribuyente->actividad_economica.')']);
    echo $f->input(['type'=>'div', 'label'=>'Teléfono', 'value'=>$Contribuyente->telefono]);
    echo $f->input(['type'=>'div', 'label'=>'Email', 'value'=>$Contribuyente->email]);
    echo $f->input(['type'=>'div', 'label'=>'Dirección', 'value'=>$Contribuyente->direccion.', '.$Contribuyente->getComuna()->comuna]);
    echo $f->input(['type'=>'div', 'label'=>'Sitio web', 'value'=>'<a href="'.$Contribuyente->config_extra_web.'" target="_blank">'.$Contribuyente->config_extra_web.'</a>']);
    echo $f->input(['type'=>'div', 'label'=>'Intercambio', 'value'=>$Contribuyente->config_email_intercambio_user]);
    echo $f->input(['type'=>'div', 'label'=>'Autorizado', 'value'=>$Contribuyente->config_ambiente_produccion_numero?'Si':'No']);
}
echo $f->end('Buscar contribuyente');
