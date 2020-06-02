<?php

/* asd.html */
class __TwigTemplate_5b1009b2f8c6e963194912cd77d8342615aeeeaa544cc6dea598370d2998bebe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "asd.html", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
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
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "<blockquote>";
            // line 12
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
</blockquote>";
        }
        // line 15
        echo "
<h1>PROBAN2</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Paciente</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Ficha</th>
        </tr>
        
    </table>";
    }

    public function getTemplateName()
    {
        return "asd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  47 => 12,  45 => 11,  43 => 10,  40 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block header %}
\t{{ include('partials/header.html') }}
{% endblock %}
\t\t
{% block main %}


{% if error %}
<blockquote>
\t{{ error }}
</blockquote>
{% endif %}

<h1>PROBAN2</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Paciente</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Ficha</th>
        </tr>
        
    </table>
{% endblock %}", "asd.html", "D:\\Documents\\GitHub\\PAW2020\\Tp-3(DB)\\app\\views\\asd.html");
    }
}
