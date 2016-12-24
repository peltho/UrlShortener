<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf439ed3737213d264594427f6c80ba3a7c170064c79b0bd6dc82f868361f9a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21d33a2f2301b06e76b73d0af8cbea95fde676f41771ee13d360a2fd8ad80b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d33a2f2301b06e76b73d0af8cbea95fde676f41771ee13d360a2fd8ad80b67->enter($__internal_21d33a2f2301b06e76b73d0af8cbea95fde676f41771ee13d360a2fd8ad80b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_28efa764bb98721f76a60a85ffe10aed2a56a8107d3d7e40f822b585c8a28ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28efa764bb98721f76a60a85ffe10aed2a56a8107d3d7e40f822b585c8a28ae7->enter($__internal_28efa764bb98721f76a60a85ffe10aed2a56a8107d3d7e40f822b585c8a28ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d33a2f2301b06e76b73d0af8cbea95fde676f41771ee13d360a2fd8ad80b67->leave($__internal_21d33a2f2301b06e76b73d0af8cbea95fde676f41771ee13d360a2fd8ad80b67_prof);

        
        $__internal_28efa764bb98721f76a60a85ffe10aed2a56a8107d3d7e40f822b585c8a28ae7->leave($__internal_28efa764bb98721f76a60a85ffe10aed2a56a8107d3d7e40f822b585c8a28ae7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d3f3a8b0c050157dd1c1e8008224522148d1a522dbe8ecd336e81cd6e96cd11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3f3a8b0c050157dd1c1e8008224522148d1a522dbe8ecd336e81cd6e96cd11->enter($__internal_4d3f3a8b0c050157dd1c1e8008224522148d1a522dbe8ecd336e81cd6e96cd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_adb423044edf8bc3681a975c9834088b54c5a88a12bbbc8fead3c44a2c12cf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb423044edf8bc3681a975c9834088b54c5a88a12bbbc8fead3c44a2c12cf9b->enter($__internal_adb423044edf8bc3681a975c9834088b54c5a88a12bbbc8fead3c44a2c12cf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_adb423044edf8bc3681a975c9834088b54c5a88a12bbbc8fead3c44a2c12cf9b->leave($__internal_adb423044edf8bc3681a975c9834088b54c5a88a12bbbc8fead3c44a2c12cf9b_prof);

        
        $__internal_4d3f3a8b0c050157dd1c1e8008224522148d1a522dbe8ecd336e81cd6e96cd11->leave($__internal_4d3f3a8b0c050157dd1c1e8008224522148d1a522dbe8ecd336e81cd6e96cd11_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e912944e0d4758973d988500bdb18126ed79637afcc13fbb0a1507b941e2ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e912944e0d4758973d988500bdb18126ed79637afcc13fbb0a1507b941e2ade->enter($__internal_2e912944e0d4758973d988500bdb18126ed79637afcc13fbb0a1507b941e2ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2fbbc6424ce43311f0f3320de788164daf0b00b803957531e3be03e0c26df6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fbbc6424ce43311f0f3320de788164daf0b00b803957531e3be03e0c26df6d->enter($__internal_c2fbbc6424ce43311f0f3320de788164daf0b00b803957531e3be03e0c26df6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c2fbbc6424ce43311f0f3320de788164daf0b00b803957531e3be03e0c26df6d->leave($__internal_c2fbbc6424ce43311f0f3320de788164daf0b00b803957531e3be03e0c26df6d_prof);

        
        $__internal_2e912944e0d4758973d988500bdb18126ed79637afcc13fbb0a1507b941e2ade->leave($__internal_2e912944e0d4758973d988500bdb18126ed79637afcc13fbb0a1507b941e2ade_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_607ea4e588b85d13eb79c51f852005640a512c2a4db09f33b162bc212894f03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607ea4e588b85d13eb79c51f852005640a512c2a4db09f33b162bc212894f03c->enter($__internal_607ea4e588b85d13eb79c51f852005640a512c2a4db09f33b162bc212894f03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb68fe5840f5bd3dcd758776f5860ef22f09fed12658b82ffd5f052f79ecafa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb68fe5840f5bd3dcd758776f5860ef22f09fed12658b82ffd5f052f79ecafa0->enter($__internal_eb68fe5840f5bd3dcd758776f5860ef22f09fed12658b82ffd5f052f79ecafa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_eb68fe5840f5bd3dcd758776f5860ef22f09fed12658b82ffd5f052f79ecafa0->leave($__internal_eb68fe5840f5bd3dcd758776f5860ef22f09fed12658b82ffd5f052f79ecafa0_prof);

        
        $__internal_607ea4e588b85d13eb79c51f852005640a512c2a4db09f33b162bc212894f03c->leave($__internal_607ea4e588b85d13eb79c51f852005640a512c2a4db09f33b162bc212894f03c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
