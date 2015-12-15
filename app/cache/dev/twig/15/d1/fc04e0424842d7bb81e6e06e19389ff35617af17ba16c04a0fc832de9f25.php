<?php

/* ::base.html.twig */
class __TwigTemplate_15d1fc04e0424842d7bb81e6e06e19389ff35617af17ba16c04a0fc832de9f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        
        <div id=\"cabecera\">
            ";
        // line 13
        $this->displayBlock('cabecera', $context, $blocks);
        // line 16
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 19
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 20
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 23
        $this->displayBlock('pie', $context, $blocks);
        // line 24
        echo "        </div>
       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Hola mundo";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unimusica/css/gruposcss.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 13
    public function block_cabecera($context, array $blocks = array())
    {
        // line 14
        echo "                <h1>GRUPOS</h1>
            ";
    }

    // line 19
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "Cuerpo";
    }

    // line 23
    public function block_pie($context, array $blocks = array())
    {
        echo "By IVAN";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  90 => 19,  85 => 14,  82 => 13,  75 => 7,  72 => 6,  66 => 5,  58 => 24,  56 => 23,  51 => 20,  49 => 19,  44 => 16,  42 => 13,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
