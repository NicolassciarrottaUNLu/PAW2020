<?php

/* linkTurno.html */
class __TwigTemplate_8acc2e2736f5c03a37688833ed7aff77a74bd22b598dd044508b88340eac2990 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "linkTurno.html", 1);
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
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<h2>Datos del turno n°";
        echo twig_escape_filter($this->env, ($context["id_turno"] ?? null), "html", null, true);
        echo "</h2>
     
     <ul class = \"resumen\">
        <li>Paciente:";
        // line 11
        echo twig_escape_filter($this->env, ($context["nombre"] ?? null), "html", null, true);
        echo "</li>
        <li>Correo electrónico:";
        // line 12
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo " </li>
        <li>Teléfono:";
        // line 13
        echo twig_escape_filter($this->env, ($context["telefono"] ?? null), "html", null, true);
        echo "</li>
        <li>Edad:";
        // line 14
        echo twig_escape_filter($this->env, ($context["edad"] ?? null), "html", null, true);
        echo "</li>
        <li>Talla de calzado:";
        // line 15
        echo twig_escape_filter($this->env, ($context["talla"] ?? null), "html", null, true);
        echo "</li>
        <li>Altura:";
        // line 16
        echo twig_escape_filter($this->env, ($context["altura"] ?? null), "html", null, true);
        echo " </li>
        <li>Fecha de nacimiento:";
        // line 17
        echo twig_escape_filter($this->env, ($context["fecha_nacimiento"] ?? null), "html", null, true);
        echo "</li>
        <li>Color de pelo:";
        // line 18
        echo twig_escape_filter($this->env, ($context["color_pelo"] ?? null), "html", null, true);
        echo " </li>
        <li>Fecha de turno:";
        // line 19
        echo twig_escape_filter($this->env, ($context["fecha_turno"] ?? null), "html", null, true);
        echo "</li>
        <li>Hora de turno:";
        // line 20
        echo twig_escape_filter($this->env, ($context["hora_turno"] ?? null), "html", null, true);
        echo "</li>
        <li>Diagnóstico adjuntado:</li>
        <li><img src= \"";
        // line 22
        echo twig_escape_filter($this->env, ($context["diagnostico"] ?? null), "html", null, true);
        echo "\" alt=\"Imagen diagnostico\"></li>  
     </ul>";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "    <p>VERAMEDICA - SERVICIOS DE SALUD A SU ALCANCE</p>";
    }

    public function getTemplateName()
    {
        return "linkTurno.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  98 => 25,  92 => 22,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  44 => 8,  41 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block header %}
\t{{ include('partials/header.html') }}
{% endblock %}

{% block main %}
<h2>Datos del turno n°{{ id_turno }}</h2>
     
     <ul class = \"resumen\">
        <li>Paciente: {{ nombre }}</li>
        <li>Correo electrónico: {{ email }} </li>
        <li>Teléfono: {{ telefono }}</li>
        <li>Edad: {{ edad }}</li>
        <li>Talla de calzado: {{ talla }}</li>
        <li>Altura: {{ altura }} </li>
        <li>Fecha de nacimiento: {{ fecha_nacimiento }}</li>
        <li>Color de pelo: {{ color_pelo }} </li>
        <li>Fecha de turno: {{ fecha_turno }}</li>
        <li>Hora de turno: {{ hora_turno }}</li>
        <li>Diagnóstico adjuntado:</li>
        <li><img src= \"{{ diagnostico }}\" alt=\"Imagen diagnostico\"></li>  
     </ul>
{% endblock %}
{% block footer %}
    <p>VERAMEDICA - SERVICIOS DE SALUD A SU ALCANCE</p>
{% endblock %}", "linkTurno.html", "D:\\Documents\\GitHub\\PAW2020\\Tp-3(DB)\\www\\app\\views\\linkturno.html");
    }
}
