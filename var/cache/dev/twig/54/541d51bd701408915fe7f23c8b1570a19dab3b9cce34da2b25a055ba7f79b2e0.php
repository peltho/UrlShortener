<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2f0abc36a76879b2101380feaff1e568534bca7fec586d3e6613e4bf840a4f59 extends Twig_Template
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
        $__internal_9fcc1277aadddcc78e123e19a80917b2c5a32c87c06f2733b89b995dfe892146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcc1277aadddcc78e123e19a80917b2c5a32c87c06f2733b89b995dfe892146->enter($__internal_9fcc1277aadddcc78e123e19a80917b2c5a32c87c06f2733b89b995dfe892146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a8ed5528a8b8ef520a347a42e3e4b950d78544ae5faa165f5d73146250eb912d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ed5528a8b8ef520a347a42e3e4b950d78544ae5faa165f5d73146250eb912d->enter($__internal_a8ed5528a8b8ef520a347a42e3e4b950d78544ae5faa165f5d73146250eb912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9fcc1277aadddcc78e123e19a80917b2c5a32c87c06f2733b89b995dfe892146->leave($__internal_9fcc1277aadddcc78e123e19a80917b2c5a32c87c06f2733b89b995dfe892146_prof);

        
        $__internal_a8ed5528a8b8ef520a347a42e3e4b950d78544ae5faa165f5d73146250eb912d->leave($__internal_a8ed5528a8b8ef520a347a42e3e4b950d78544ae5faa165f5d73146250eb912d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
