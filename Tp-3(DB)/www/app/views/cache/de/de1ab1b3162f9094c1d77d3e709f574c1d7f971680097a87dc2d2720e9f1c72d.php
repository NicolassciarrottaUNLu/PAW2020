<?php

/* error.html */
class __TwigTemplate_85d3084b168702a92401871675e9e24eccd9b1a2e7aebf48bb38ca1ea7ffffa9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = array())
    {
        // line 2
        echo "<blockquote>
\t<code>";
        // line 3
        echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
        echo "</code>";
        // line 4
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "
</blockquote>";
    }

    public function getTemplateName()
    {
        return "error.html";
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  33 => 3,  30 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block main %}
<blockquote>
\t<code>{{ code }}</code>
\t{{ error }}
</blockquote>
{% endblock %}", "error.html", "D:\\Documents\\GitHub\\PAW2020\\Tp-3(DB)\\app\\views\\error.html");
    }
}
