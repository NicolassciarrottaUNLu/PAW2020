<?php

/* form.html */
class __TwigTemplate_3137c62589d576e4867ffee2be54827adea53f97fd305d99846f4228b0996ae2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "form.html", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo twig_include($this->env, $context, "partials/header.html");
        echo "
    <script>
        addEventListener('load',inicio,false);
        function reset()
        {
          document.getElementById('alt').innetHTML='150';
        }
        function inicio()
        {
          document.getElementById('altura').addEventListener('change',cambioAltura,false);
        }
      
        function cambioAltura()
        {    
          document.getElementById('alt').innerHTML=document.getElementById('altura').value;
        }
      </script>";
    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        // line 26
        if (($context["error"] ?? null)) {
            // line 27
            echo "<blockquote>";
            // line 28
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
</blockquote>";
        }
        // line 31
        echo "
<h1>";
        // line 32
        echo twig_escape_filter($this->env, ($context["cabecera"] ?? null), "html", null, true);
        echo "</h1>
<form action=\"/turnos/guardar\" method=\"POST\" enctype=\"multipart/form-data\" class=\"box\">

    <label class=\"separate\"> Datos personales</label>
    
    <input type=hidden name=\"id_turno\" value=";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "id_turno", array()), "html", null, true);
        echo ">
     
    <input type=\"text\" name=\"nombre\"placeholder=\"*Nombre del paciente\" required value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "nombre", array()), "html", null, true);
        echo "\">
    <label for=\"nombre\" class = \"error\">";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["errores"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "html", null, true);
        echo "</label>
    
    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"*E-mail\" required value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "email", array()), "html", null, true);
        echo "\">
    <label for=\"email\" class = \"error\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errores"] ?? null), "email", array()), "html", null, true);
        echo " </label>

    <input type=\"tel\" name=\"telefono\" placeholder=\"*Teléfono\" required value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "telefono", array()), "html", null, true);
        echo "\">
    <label for=\"telefono\" class = \"error\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errores"] ?? null), "telefono", array()), "html", null, true);
        echo "</label>

    <input type=\"number\" name=\"edad\" id=\"edad\" placeholder=\"Edad\" min=\"1\" max=\"130\" value = \"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "edad", array()), "html", null, true);
        echo "\">
    <label for=\"edad\" class = \"error\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errores"] ?? null), "edad", array()), "html", null, true);
        echo "</label>
    
    <input type=\"number\" name=\"talla\" id=\"talla\" placeholder=\"Talla\" min = \"20\" max =\"45\" step=\"1\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "talla", array()), "html", null, true);
        echo "\">
    <label for=\"talla\" class = \"error\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errores"] ?? null), "talla", array()), "html", null, true);
        echo "</label>

    <div id =\"boxAltura\">
        <label for=\"range\" id=\"rangoAltura\">Altura</label>
        <input type=\"range\" id=\"altura\" min =\"0\" max =\"300\" id=\"altura\" value=\"150\" name=\"altura\">
        <span id=\"alt\">150</span><span>cm</span>
    </div>
   
   
    <label for=\"Fecha_de_nacimiento\">Fecha de nacimiento</label>
    <input type=\"date\" id=\"fecha_nacimiento\" name=\"fecha_nacimiento\" required value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "\">
    <label for=\"fecha_nacimiento\" class = \"error\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errores"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "</label>
    
    <select name=\"color_pelo\" id=\"color_pelo\">
        <option value=\"rubio\">Rubio</option>
        <option value=\"morocho\">Morocho</option>
        <option value=\"castaño\">Castaño</option>
        <option value=\"pelirrojo\">Pelirrojo</option>
    </select>
    
    <label for=\"date\" class = \"separate\">Fecha y hora de turno:</label>
    <input type=\"date\" id=\"fecha_turno\" name=\"fecha_turno\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "\">
    <label for=\"fecha_turno\" class = \"error\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errores"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "</label>

    <input type=\"time\" id=\"hora_turno\" name=\"hora_turno\" min=\"08:00:00\" max=\"17:00:00\" step=\"900\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "hora_turno", array()), "html", null, true);
        echo "\">
    <label for=\"hora_turno\" class = \"error\">";
        // line 77
        echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["errores"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[7] ?? null) : null), "html", null, true);
        echo "</label>

    <label for=\"diagnostico\" class = \"separate\" >Diagnóstico</label>
    <input type=\"file\" id=\"diagnostico\" name =\"diagnostico\" accept=\"image/png, .jpg\" value =\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "diagnostico", array()), "html", null, true);
        echo "\"> 
    <label for=\"diagnostico\" class = \"error\">";
        // line 81
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "</label>

    <input type=\"submit\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["boton"] ?? null), "html", null, true);
        echo "\" name=\"submit\">
    <input type=\"reset\" value=\"Limpiar\" name=\"reset\">
    
</form>";
    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        // line 89
        echo "    <p>VERAMEDICA - SERVICIOS DE SALUD A SU ALCANCE</p>";
    }

    public function getTemplateName()
    {
        return "form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 89,  192 => 88,  184 => 83,  179 => 81,  175 => 80,  169 => 77,  165 => 76,  160 => 74,  156 => 73,  143 => 63,  139 => 62,  126 => 52,  122 => 51,  117 => 49,  113 => 48,  108 => 46,  104 => 45,  99 => 43,  95 => 42,  90 => 40,  86 => 39,  81 => 37,  73 => 32,  70 => 31,  65 => 28,  63 => 27,  61 => 26,  58 => 23,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block header %}
    {{ include('partials/header.html') }}
    <script>
        addEventListener('load',inicio,false);
        function reset()
        {
          document.getElementById('alt').innetHTML='150';
        }
        function inicio()
        {
          document.getElementById('altura').addEventListener('change',cambioAltura,false);
        }
      
        function cambioAltura()
        {    
          document.getElementById('alt').innerHTML=document.getElementById('altura').value;
        }
      </script>
{% endblock %}
\t\t
{% block main %}


{% if error %}
<blockquote>
\t{{ error }}
</blockquote>
{% endif %}

<h1> {{ cabecera }}</h1>
<form action=\"/turnos/guardar\" method=\"POST\" enctype=\"multipart/form-data\" class=\"box\">

    <label class=\"separate\"> Datos personales</label>
    
    <input type=hidden name=\"id_turno\" value= {{turno.id_turno}}>
     
    <input type=\"text\" name=\"nombre\"placeholder=\"*Nombre del paciente\" required value=\"{{ turno.nombre }}\">
    <label for=\"nombre\" class = \"error\"> {{ errores[0] }}</label>
    
    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"*E-mail\" required value=\"{{ turno.email }}\">
    <label for=\"email\" class = \"error\">{{ errores.email }} </label>

    <input type=\"tel\" name=\"telefono\" placeholder=\"*Teléfono\" required value=\"{{ turno.telefono }}\">
    <label for=\"telefono\" class = \"error\">{{ errores.telefono }}</label>

    <input type=\"number\" name=\"edad\" id=\"edad\" placeholder=\"Edad\" min=\"1\" max=\"130\" value = \"{{ turno.edad }}\">
    <label for=\"edad\" class = \"error\">{{ errores.edad }}</label>
    
    <input type=\"number\" name=\"talla\" id=\"talla\" placeholder=\"Talla\" min = \"20\" max =\"45\" step=\"1\" value=\"{{ turno.talla }}\">
    <label for=\"talla\" class = \"error\">{{ errores.talla }}</label>

    <div id =\"boxAltura\">
        <label for=\"range\" id=\"rangoAltura\">Altura</label>
        <input type=\"range\" id=\"altura\" min =\"0\" max =\"300\" id=\"altura\" value=\"150\" name=\"altura\">
        <span id=\"alt\">150</span><span>cm</span>
    </div>
   
   
    <label for=\"Fecha_de_nacimiento\">Fecha de nacimiento</label>
    <input type=\"date\" id=\"fecha_nacimiento\" name=\"fecha_nacimiento\" required value=\"{{ turno.fecha_nacimiento }}\">
    <label for=\"fecha_nacimiento\" class = \"error\">{{ errores.fecha_nacimiento }}</label>
    
    <select name=\"color_pelo\" id=\"color_pelo\">
        <option value=\"rubio\">Rubio</option>
        <option value=\"morocho\">Morocho</option>
        <option value=\"castaño\">Castaño</option>
        <option value=\"pelirrojo\">Pelirrojo</option>
    </select>
    
    <label for=\"date\" class = \"separate\">Fecha y hora de turno:</label>
    <input type=\"date\" id=\"fecha_turno\" name=\"fecha_turno\" value=\"{{ turno.fecha_turno }}\">
    <label for=\"fecha_turno\" class = \"error\">{{ errores.fecha_turno }}</label>

    <input type=\"time\" id=\"hora_turno\" name=\"hora_turno\" min=\"08:00:00\" max=\"17:00:00\" step=\"900\" value=\"{{ turno.hora_turno }}\">
    <label for=\"hora_turno\" class = \"error\">{{ errores[7] }}</label>

    <label for=\"diagnostico\" class = \"separate\" >Diagnóstico</label>
    <input type=\"file\" id=\"diagnostico\" name =\"diagnostico\" accept=\"image/png, .jpg\" value =\"{{ turno.diagnostico }}\"> 
    <label for=\"diagnostico\" class = \"error\">{{ error }}</label>

    <input type=\"submit\" value=\"{{ boton }}\" name=\"submit\">
    <input type=\"reset\" value=\"Limpiar\" name=\"reset\">
    
</form>
{% endblock %}
{% block footer %}
    <p>VERAMEDICA - SERVICIOS DE SALUD A SU ALCANCE</p>
{% endblock %}", "form.html", "D:\\Documents\\GitHub\\PAW2020\\Tp-3(DB)\\www\\app\\views\\form.html");
    }
}
