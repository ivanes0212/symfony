<?php

/* uniMusicaBundle:Default:musica.html.twig */
class __TwigTemplate_699c1ef4bc3245854fa3fd2af121609a4ba5c628ec01e0fa564f9de03e46557d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniMusicaBundle::layout.html.twig");

        $this->blocks = array(
            'central' => array($this, 'block_central'),
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

    // line 7
    public function block_central($context, array $blocks = array())
    {
        // line 8
        echo "
    
                
    <p>


   ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grupos"]) ? $context["grupos"] : $this->getContext($context, "grupos")));
        foreach ($context['_seq'] as $context["_key"] => $context["unafila"]) {
            // line 15
            echo "
   <h4> <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_grupos", array("titulo" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "titulo"), "descripcion" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "descripcion"), "foto" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "foto"), "articulo" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "articulo"))), "html", null, true);
            // line 17
            echo "\">
           ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "titulo"), "html", null, true);
            echo "</a></h4><br>
              ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "descripcion"), "html", null, true);
            echo "<br>
             <br><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unimusica/imagenes/" . $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "foto")) . "")), "html", null, true);
            echo "\" width=20% height=20%/>
             <br><br><br>
     
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unafila'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    <br>
    <br>
 

</p>
   
 ";
    }

    public function getTemplateName()
    {
        return "uniMusicaBundle:Default:musica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  59 => 20,  55 => 19,  51 => 18,  48 => 17,  46 => 16,  43 => 15,  39 => 14,  31 => 8,  28 => 7,);
    }
}
