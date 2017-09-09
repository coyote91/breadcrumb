<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>


<div class="step-process_path" id="step-process_path">
  <ul style="list-style-type: none;">

    <li class="step-process_inactive step-process_closed">  <!-- step-process_inactive-active  step-process_active  -->  <!-- step-process_inactive   step-process_closed -->
            <!--  step-process_inactive-active -->       <!--- step-process_inactive  #estado inactivo -->    <!-- step-process_active  #estado activo -->
      <div id="step-process_step-1" class="step-process_border-right  step-process_inactive-active  step-process_for_3_steps">
        <i class="step-process_bullet-off">1</i>      <!--   step-process_bullet-on  step-process_bullet-off   #dos estados para el circulo con el numero --->
        <span class="step-process_text-in-icon-closed">Definición del pago</span><!--  step-process_text-in-icon-closed  #estado inactivo--> <!--- step-process_text-in-icon   #estado activo --->
      </div>
    </li>

    <li class="step-process_active">  <!-- step-process_active  -->  <!-- step-process_inactive-active -->  <!-- step-process_inactive   step-process_closed  --->
            <!--  step-process_inactive-active -->       <!--- step-process_inactive  #estado inactivo -->    <!-- step-process_active  #estado activo -->
      <div id="step-process_step-2" class="step-process_border-right step-process_active step-process_for_3_steps">
        <i class="step-process_bullet-on">2</i>   <!--   step-process_bullet-on  step-process_bullet-off   #dos estados para el circulo con el numero --->
        <span class="step-process_text-in-icon">Confirmación</span>   <!--  step-process_text-in-icon-closed  #estado inactivo--> <!--- step-process_text-in-icon   #estado activo --->
      </div>
    </li>

    <li class="step-process_active "> <!--en ultimo paso activo  step-process_active  -->  <!-- step-process_inactive step-process_closed  #inactivo  -->
       <!--  step-process_inactive-active -->       <!--- step-process_inactive  #estado inactivo -->    <!-- step-process_active  #estado activo -->
      <div id="step-process_step-3" class="step-process_border-right laststep-process_active step-process_for_3_steps">
      <!-- ultimo paso en activo     laststep-process_active -->      <!-- ultimo paso en inactivo step-process_border-right  step-process_for_3_steps-->
        <i class="step-process_bullet-off">3</i>   <!--   step-process_bullet-on  step-process_bullet-off   #dos estados para el circulo con el numero --->
        <span class="step-process_text-in-icon-closed">Comprobante</span> <!--  step-process_text-in-icon-closed  #estado inactivo--> <!--- step-process_text-in-icon   #estado activo --->
      </div>
    </li>

  </ul>
</div>









  </body>
</html>
