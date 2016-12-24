<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b5dc5a4086d0bd5a883a791f2bb2c564c1c9a8ce99041ca6478472090a147fe9 extends Twig_Template
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
        $__internal_6cd8d6a9b0906a87a10c16de1ee5b0b1ae444ed422869472f87850ec6afc8aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd8d6a9b0906a87a10c16de1ee5b0b1ae444ed422869472f87850ec6afc8aa9->enter($__internal_6cd8d6a9b0906a87a10c16de1ee5b0b1ae444ed422869472f87850ec6afc8aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_eb73908bb00f3b940b01edb3dd6c5893034d73599c817fe2306dd08023736acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb73908bb00f3b940b01edb3dd6c5893034d73599c817fe2306dd08023736acc->enter($__internal_eb73908bb00f3b940b01edb3dd6c5893034d73599c817fe2306dd08023736acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_6cd8d6a9b0906a87a10c16de1ee5b0b1ae444ed422869472f87850ec6afc8aa9->leave($__internal_6cd8d6a9b0906a87a10c16de1ee5b0b1ae444ed422869472f87850ec6afc8aa9_prof);

        
        $__internal_eb73908bb00f3b940b01edb3dd6c5893034d73599c817fe2306dd08023736acc->leave($__internal_eb73908bb00f3b940b01edb3dd6c5893034d73599c817fe2306dd08023736acc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
