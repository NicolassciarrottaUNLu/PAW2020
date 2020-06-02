<?php

/* base.html */
class __TwigTemplate_db8238d1d2cee88693f19bfb69ec087f3e08fdaad64b925e5a59cb4ccc8f4bf4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "  </head>
  <body>
    <header>";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        echo "</header>
    <main>";
        // line 13
        $this->displayBlock('main', $context, $blocks);
        echo "</main>
    <footer>";
        // line 14
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "          <meta charset=\"utf-8\">
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
          <link rel=\"stylesheet\" href=\"/public/css/styles.css\">
          <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  76 => 13,  71 => 12,  62 => 8,  57 => 5,  54 => 4,  46 => 14,  42 => 13,  38 => 12,  34 => 10,  32 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
        {% block head %}
          <meta charset=\"utf-8\">
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
          <link rel=\"stylesheet\" href=\"/public/css/styles.css\">
          <title>{% block title %}{% endblock %}</title>
        {% endblock %}
  </head>
  <body>
    <header>{% block header %}{% endblock %}</header>
    <main>{% block main %}{% endblock %}</main>
    <footer>{% block footer %}{% endblock %}</footer>
  </body>
</html>
", "base.html", "D:\\Documents\\GitHub\\PAW2020\\Tp-3(DB)\\www\\app\\views\\base.html");
    }
}
