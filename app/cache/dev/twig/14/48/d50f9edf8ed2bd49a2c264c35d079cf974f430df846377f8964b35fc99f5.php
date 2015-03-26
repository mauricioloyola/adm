<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_1448d50f9edf8ed2bd49a2c264c35d079cf974f430df846377f8964b35fc99f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::backend.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulo_page' => array($this, 'block_titulo_page'),
            'descrip_opcional' => array($this, 'block_descrip_opcional'),
            'level' => array($this, 'block_level'),
            'here' => array($this, 'block_here'),
            'active_inicio' => array($this, 'block_active_inicio'),
            'active_tabla_principal' => array($this, 'block_active_tabla_principal'),
            'active_tabla_categoria' => array($this, 'block_active_tabla_categoria'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 6
    public function block_titulo_page($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 8
    public function block_descrip_opcional($context, array $blocks = array())
    {
    }

    // line 10
    public function block_level($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 12
    public function block_here($context, array $blocks = array())
    {
    }

    // line 14
    public function block_active_inicio($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 15
    public function block_active_tabla_principal($context, array $blocks = array())
    {
        echo "class=\"treeview\"";
    }

    // line 16
    public function block_active_tabla_categoria($context, array $blocks = array())
    {
    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  84 => 16,  78 => 15,  72 => 14,  67 => 12,  61 => 10,  56 => 8,  50 => 6,  44 => 4,  11 => 2,);
    }
}
