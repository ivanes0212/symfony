<?php

/* uniMusicaBundle:grupos:noticias.html.twig */
class __TwigTemplate_831c1ec6b21629b749bb4c94eb429d5b372b428e55b8368be94c9bd9a0acb4f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniMusicaBundle::layout.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniMusicaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "</h1>

<br>

<h3>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["descripcion"]) ? $context["descripcion"] : $this->getContext($context, "descripcion")), "html", null, true);
        echo "</h3>
<br><br>
";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "html", null, true);
        echo "
<br>


<br>
<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unimusica/imagenes/" . (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto"))) . "")), "html", null, true);
        echo "\" width=40% height=40%/>

<br>
<br>
  <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("uni_musica");
        // line 21
        echo "\">Volver</a>
   ";
    }

    public function getTemplateName()
    {
        return "uniMusicaBundle:grupos:noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  59 => 19,  52 => 15,  44 => 10,  39 => 8,  31 => 4,  28 => 3,);
    }
}
