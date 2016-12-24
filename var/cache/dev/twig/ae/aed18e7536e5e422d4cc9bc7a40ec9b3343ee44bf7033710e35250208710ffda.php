<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
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
        $__internal_59eec74e95bccb84982ab9864cfca7fa763605bc3f18754aa58fd7beeb7fc0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59eec74e95bccb84982ab9864cfca7fa763605bc3f18754aa58fd7beeb7fc0fb->enter($__internal_59eec74e95bccb84982ab9864cfca7fa763605bc3f18754aa58fd7beeb7fc0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cee529d3bf214deb85862dfed16bc8439442ee63d52c8b49488247a978b669b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee529d3bf214deb85862dfed16bc8439442ee63d52c8b49488247a978b669b9->enter($__internal_cee529d3bf214deb85862dfed16bc8439442ee63d52c8b49488247a978b669b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59eec74e95bccb84982ab9864cfca7fa763605bc3f18754aa58fd7beeb7fc0fb->leave($__internal_59eec74e95bccb84982ab9864cfca7fa763605bc3f18754aa58fd7beeb7fc0fb_prof);

        
        $__internal_cee529d3bf214deb85862dfed16bc8439442ee63d52c8b49488247a978b669b9->leave($__internal_cee529d3bf214deb85862dfed16bc8439442ee63d52c8b49488247a978b669b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f23e6ea86d0fa87ae5ae34e8826c057ecb8fc744cba7787deab10ac846471138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23e6ea86d0fa87ae5ae34e8826c057ecb8fc744cba7787deab10ac846471138->enter($__internal_f23e6ea86d0fa87ae5ae34e8826c057ecb8fc744cba7787deab10ac846471138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dce6810ce0bd2bc9a728972287819d4b356b672e265745fc0c75b2cf1a7883be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce6810ce0bd2bc9a728972287819d4b356b672e265745fc0c75b2cf1a7883be->enter($__internal_dce6810ce0bd2bc9a728972287819d4b356b672e265745fc0c75b2cf1a7883be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dce6810ce0bd2bc9a728972287819d4b356b672e265745fc0c75b2cf1a7883be->leave($__internal_dce6810ce0bd2bc9a728972287819d4b356b672e265745fc0c75b2cf1a7883be_prof);

        
        $__internal_f23e6ea86d0fa87ae5ae34e8826c057ecb8fc744cba7787deab10ac846471138->leave($__internal_f23e6ea86d0fa87ae5ae34e8826c057ecb8fc744cba7787deab10ac846471138_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9335cfa5196ee3762c414c9bd5b6d558055af1218bff2e3d7dc0a363446ec916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9335cfa5196ee3762c414c9bd5b6d558055af1218bff2e3d7dc0a363446ec916->enter($__internal_9335cfa5196ee3762c414c9bd5b6d558055af1218bff2e3d7dc0a363446ec916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_686acc9758a91100f90817bcb71ec5159ce2426561ef2271ed7e5da2747143d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686acc9758a91100f90817bcb71ec5159ce2426561ef2271ed7e5da2747143d8->enter($__internal_686acc9758a91100f90817bcb71ec5159ce2426561ef2271ed7e5da2747143d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_686acc9758a91100f90817bcb71ec5159ce2426561ef2271ed7e5da2747143d8->leave($__internal_686acc9758a91100f90817bcb71ec5159ce2426561ef2271ed7e5da2747143d8_prof);

        
        $__internal_9335cfa5196ee3762c414c9bd5b6d558055af1218bff2e3d7dc0a363446ec916->leave($__internal_9335cfa5196ee3762c414c9bd5b6d558055af1218bff2e3d7dc0a363446ec916_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee5cab5186ea95de1b83f03f9c0055ee6e7ca5b9d4c21e537178b9d275ded991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5cab5186ea95de1b83f03f9c0055ee6e7ca5b9d4c21e537178b9d275ded991->enter($__internal_ee5cab5186ea95de1b83f03f9c0055ee6e7ca5b9d4c21e537178b9d275ded991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_664b30abd5c5e29b61c557ced481ae14780ad242556ea3607d55218ac40d8c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664b30abd5c5e29b61c557ced481ae14780ad242556ea3607d55218ac40d8c55->enter($__internal_664b30abd5c5e29b61c557ced481ae14780ad242556ea3607d55218ac40d8c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_664b30abd5c5e29b61c557ced481ae14780ad242556ea3607d55218ac40d8c55->leave($__internal_664b30abd5c5e29b61c557ced481ae14780ad242556ea3607d55218ac40d8c55_prof);

        
        $__internal_ee5cab5186ea95de1b83f03f9c0055ee6e7ca5b9d4c21e537178b9d275ded991->leave($__internal_ee5cab5186ea95de1b83f03f9c0055ee6e7ca5b9d4c21e537178b9d275ded991_prof);

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
