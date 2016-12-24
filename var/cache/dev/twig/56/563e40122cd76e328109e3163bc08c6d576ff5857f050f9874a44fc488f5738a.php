<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_53cffb39e2741b475995220b9752f0b648b1f897c6060d4f8f11efcb8503422e extends Twig_Template
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
        $__internal_765dea84f5697801f565b33492771a4a167c14d6c801cadb5e710fcc59b5ce17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765dea84f5697801f565b33492771a4a167c14d6c801cadb5e710fcc59b5ce17->enter($__internal_765dea84f5697801f565b33492771a4a167c14d6c801cadb5e710fcc59b5ce17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d9384c49ca3f5e62ec4ee65adec7c3dae5bd6f245c3224e7afe56bf4215a3b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9384c49ca3f5e62ec4ee65adec7c3dae5bd6f245c3224e7afe56bf4215a3b87->enter($__internal_d9384c49ca3f5e62ec4ee65adec7c3dae5bd6f245c3224e7afe56bf4215a3b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_765dea84f5697801f565b33492771a4a167c14d6c801cadb5e710fcc59b5ce17->leave($__internal_765dea84f5697801f565b33492771a4a167c14d6c801cadb5e710fcc59b5ce17_prof);

        
        $__internal_d9384c49ca3f5e62ec4ee65adec7c3dae5bd6f245c3224e7afe56bf4215a3b87->leave($__internal_d9384c49ca3f5e62ec4ee65adec7c3dae5bd6f245c3224e7afe56bf4215a3b87_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
