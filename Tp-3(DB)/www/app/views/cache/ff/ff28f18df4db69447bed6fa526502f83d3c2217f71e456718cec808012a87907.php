<?php

/* inicio.html */
class __TwigTemplate_e2c5132d69418dee3f909b8e3a52f9fbf2f82d8a61ebf3e33d5c3b82d6e436d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "inicio.html", 1);
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
        echo "
<h2>Turnos dados</h2>
<table>
    <tr>
        <th>#</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Paciente</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Ficha</th>
    </tr>";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["turnos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["turno"]) {
            // line 21
            echo "    <tr>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id_turno", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "fecha_turno", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "hora_turno", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "email", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "telefono", array()), "html", null, true);
            echo "</td>
        <td>
            <ul>
                <li><a href=\"/turnos/ver?id=";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id_turno", array()), "html", null, true);
            echo "\">Ver</a></li>
                <li><a href=\"/turnos/modificar?id=";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id_turno", array()), "html", null, true);
            echo "\">Modificar</a></li>
                <li><a href=\"/turnos/borrar?id=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id_turno", array()), "html", null, true);
            echo "\">Borrar</a></li>
            </ul>
    </tr>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "    <span>No hay turnos registrados</span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['turno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    
</table>";
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "    <p>VERAMEDICA - SERVICIOS DE SALUD A SU ALCANCE</p>";
    }

    public function getTemplateName()
    {
        return "inicio.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  118 => 41,  113 => 38,  107 => 36,  99 => 32,  95 => 31,  91 => 30,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  62 => 21,  57 => 20,  44 => 8,  41 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block header %}
\t{{ include('partials/header.html') }}
{% endblock %}
\t\t
{% block main %}

<h2>Turnos dados</h2>
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
    {% for turno in turnos %}
    <tr>
        <td>{{ turno.id_turno }}</td>
        <td>{{ turno.fecha_turno }}</td>
        <td>{{ turno.hora_turno }}</td>
        <td>{{ turno.nombre }}</td>
        <td>{{ turno.email }}</td>
        <td>{{ turno.telefono }}</td>
        <td>
            <ul>
                <li><a href=\"/turnos/ver?id={{ turno.id_turno }}\">Ver</a></li>
                <li><a href=\"/turnos/modificar?id={{ turno.id_turno }}\">Modificar</a></li>
                <li><a href=\"/turnos/borrar?id={{ turno.id_turno }}\">Borrar</a></li>
            </ul>
    </tr>
    {% else %}
    <span>No hay turnos registrados</span>
    {% endfor %}
    
</table>
{% endblock %}
{% block footer %}
    <p>VERAMEDICA - SERVICIOS DE SALUD A SU ALCANCE</p>
{% endblock %}", "inicio.html", "D:\\Documents\\GitHub\\PAW2020\\Tp-3(DB)\\www\\app\\views\\inicio.html");
    }
}
