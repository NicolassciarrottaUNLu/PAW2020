<?php

/* partials/header.html */
class __TwigTemplate_20cd24cd215a4bcbec6a4b078739cbba111b9f50c0c77bedb4587e5d090bc2a5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<header>
<h1>Vera medica </h1>
        <nav>
            <a href=\"/turnos/inicio\">Inicio</a>
            <a href=\"/turnos/nuevo\">Nuevo</a>
        </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<header>
<h1>Vera medica </h1>
        <nav>
            <a href=\"/turnos/inicio\">Inicio</a>
            <a href=\"/turnos/nuevo\">Nuevo</a>
        </nav>
</header>", "partials/header.html", "D:\\Documents\\GitHub\\PAW2020\\Tp-3(DB)\\www\\app\\views\\partials\\header.html");
    }
}
