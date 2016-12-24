<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f545595115687d7ed2aa66cb0ce4caa35974271ff400b6f173f5a4bbdacda6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bceedce68a8ab7e9d33ee455be787910a2494fe56771e50554f8d89bb965db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bceedce68a8ab7e9d33ee455be787910a2494fe56771e50554f8d89bb965db3->enter($__internal_5bceedce68a8ab7e9d33ee455be787910a2494fe56771e50554f8d89bb965db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ddbaf1b2e6d5011df0211573db5cc026645bf9c1462689d10154a4afd4e9975f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbaf1b2e6d5011df0211573db5cc026645bf9c1462689d10154a4afd4e9975f->enter($__internal_ddbaf1b2e6d5011df0211573db5cc026645bf9c1462689d10154a4afd4e9975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5bceedce68a8ab7e9d33ee455be787910a2494fe56771e50554f8d89bb965db3->leave($__internal_5bceedce68a8ab7e9d33ee455be787910a2494fe56771e50554f8d89bb965db3_prof);

        
        $__internal_ddbaf1b2e6d5011df0211573db5cc026645bf9c1462689d10154a4afd4e9975f->leave($__internal_ddbaf1b2e6d5011df0211573db5cc026645bf9c1462689d10154a4afd4e9975f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a084a91f37da4d21bace2ee1a4fbda1ad71d8cb1fe9476955993fbcf56afb35c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a084a91f37da4d21bace2ee1a4fbda1ad71d8cb1fe9476955993fbcf56afb35c->enter($__internal_a084a91f37da4d21bace2ee1a4fbda1ad71d8cb1fe9476955993fbcf56afb35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f34bc4c7aa28b4dbdd4b618c8f5d1c27b96b73fd81f5b18eb266a25d5034157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f34bc4c7aa28b4dbdd4b618c8f5d1c27b96b73fd81f5b18eb266a25d5034157->enter($__internal_0f34bc4c7aa28b4dbdd4b618c8f5d1c27b96b73fd81f5b18eb266a25d5034157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0f34bc4c7aa28b4dbdd4b618c8f5d1c27b96b73fd81f5b18eb266a25d5034157->leave($__internal_0f34bc4c7aa28b4dbdd4b618c8f5d1c27b96b73fd81f5b18eb266a25d5034157_prof);

        
        $__internal_a084a91f37da4d21bace2ee1a4fbda1ad71d8cb1fe9476955993fbcf56afb35c->leave($__internal_a084a91f37da4d21bace2ee1a4fbda1ad71d8cb1fe9476955993fbcf56afb35c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
