<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f9d0643677e54094d23d82b3ea78f8acc0aeccb706212c05826a7854cf29aff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac45ac48c2b84fc26d0d26ce87eeee9f94e6b71600aaf256236c1bb10ad1269e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac45ac48c2b84fc26d0d26ce87eeee9f94e6b71600aaf256236c1bb10ad1269e->enter($__internal_ac45ac48c2b84fc26d0d26ce87eeee9f94e6b71600aaf256236c1bb10ad1269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d58e0ef901cedb01cdd3379cd99437b9b52a746d70f8a4deb4db1402b39ab96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58e0ef901cedb01cdd3379cd99437b9b52a746d70f8a4deb4db1402b39ab96e->enter($__internal_d58e0ef901cedb01cdd3379cd99437b9b52a746d70f8a4deb4db1402b39ab96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac45ac48c2b84fc26d0d26ce87eeee9f94e6b71600aaf256236c1bb10ad1269e->leave($__internal_ac45ac48c2b84fc26d0d26ce87eeee9f94e6b71600aaf256236c1bb10ad1269e_prof);

        
        $__internal_d58e0ef901cedb01cdd3379cd99437b9b52a746d70f8a4deb4db1402b39ab96e->leave($__internal_d58e0ef901cedb01cdd3379cd99437b9b52a746d70f8a4deb4db1402b39ab96e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_909fd2a41cc4411d385161f6af58d46d5be84d8e169cf819b7d760f9210b2259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909fd2a41cc4411d385161f6af58d46d5be84d8e169cf819b7d760f9210b2259->enter($__internal_909fd2a41cc4411d385161f6af58d46d5be84d8e169cf819b7d760f9210b2259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_062ef904fb3a1ae2d03c012c9f6b299ab330b37284ec4d9380bdb9088cbe3575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062ef904fb3a1ae2d03c012c9f6b299ab330b37284ec4d9380bdb9088cbe3575->enter($__internal_062ef904fb3a1ae2d03c012c9f6b299ab330b37284ec4d9380bdb9088cbe3575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_062ef904fb3a1ae2d03c012c9f6b299ab330b37284ec4d9380bdb9088cbe3575->leave($__internal_062ef904fb3a1ae2d03c012c9f6b299ab330b37284ec4d9380bdb9088cbe3575_prof);

        
        $__internal_909fd2a41cc4411d385161f6af58d46d5be84d8e169cf819b7d760f9210b2259->leave($__internal_909fd2a41cc4411d385161f6af58d46d5be84d8e169cf819b7d760f9210b2259_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98d22763fc5e19093682dfcc7d7161ab9fcdd8786bb11187c8431bb2d3099c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d22763fc5e19093682dfcc7d7161ab9fcdd8786bb11187c8431bb2d3099c39->enter($__internal_98d22763fc5e19093682dfcc7d7161ab9fcdd8786bb11187c8431bb2d3099c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4eb5e4168adfcbddc4c3a94dd82f6f18cfe9fe9599e7c32758656685a9def230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb5e4168adfcbddc4c3a94dd82f6f18cfe9fe9599e7c32758656685a9def230->enter($__internal_4eb5e4168adfcbddc4c3a94dd82f6f18cfe9fe9599e7c32758656685a9def230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4eb5e4168adfcbddc4c3a94dd82f6f18cfe9fe9599e7c32758656685a9def230->leave($__internal_4eb5e4168adfcbddc4c3a94dd82f6f18cfe9fe9599e7c32758656685a9def230_prof);

        
        $__internal_98d22763fc5e19093682dfcc7d7161ab9fcdd8786bb11187c8431bb2d3099c39->leave($__internal_98d22763fc5e19093682dfcc7d7161ab9fcdd8786bb11187c8431bb2d3099c39_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
