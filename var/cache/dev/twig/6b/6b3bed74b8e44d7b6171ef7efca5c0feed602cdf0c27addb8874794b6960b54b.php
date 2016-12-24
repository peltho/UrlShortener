<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cf9581aa86eec52dba10373b1433911c1560c0ccbd1e257c7d27183edb822756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03117a10a39480caa6ae34384f1a36619868b49c644a3e7d44bb093bbfe35cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03117a10a39480caa6ae34384f1a36619868b49c644a3e7d44bb093bbfe35cf5->enter($__internal_03117a10a39480caa6ae34384f1a36619868b49c644a3e7d44bb093bbfe35cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_7d8ab51e1b62612efe49b34d88944712522bf5745d051232b11ce35e5d2d34ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8ab51e1b62612efe49b34d88944712522bf5745d051232b11ce35e5d2d34ed->enter($__internal_7d8ab51e1b62612efe49b34d88944712522bf5745d051232b11ce35e5d2d34ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_03117a10a39480caa6ae34384f1a36619868b49c644a3e7d44bb093bbfe35cf5->leave($__internal_03117a10a39480caa6ae34384f1a36619868b49c644a3e7d44bb093bbfe35cf5_prof);

        
        $__internal_7d8ab51e1b62612efe49b34d88944712522bf5745d051232b11ce35e5d2d34ed->leave($__internal_7d8ab51e1b62612efe49b34d88944712522bf5745d051232b11ce35e5d2d34ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
