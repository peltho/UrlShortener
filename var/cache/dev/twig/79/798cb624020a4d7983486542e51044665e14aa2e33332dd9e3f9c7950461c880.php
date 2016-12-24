<?php

/* default/index.html.twig */
class __TwigTemplate_a17ffd5020021b7bed6aa481ff516f38a509d2f3b0bd9c84d2e4c524cf9da35f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90041bd59ce293e9fbec4896c4d07a6d4f745f70e5edf603e726c454b00c4c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90041bd59ce293e9fbec4896c4d07a6d4f745f70e5edf603e726c454b00c4c54->enter($__internal_90041bd59ce293e9fbec4896c4d07a6d4f745f70e5edf603e726c454b00c4c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_44f281ad6461103a908a6c818764a1fc6b04786e48cfa16c6f93345aacd08859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f281ad6461103a908a6c818764a1fc6b04786e48cfa16c6f93345aacd08859->enter($__internal_44f281ad6461103a908a6c818764a1fc6b04786e48cfa16c6f93345aacd08859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90041bd59ce293e9fbec4896c4d07a6d4f745f70e5edf603e726c454b00c4c54->leave($__internal_90041bd59ce293e9fbec4896c4d07a6d4f745f70e5edf603e726c454b00c4c54_prof);

        
        $__internal_44f281ad6461103a908a6c818764a1fc6b04786e48cfa16c6f93345aacd08859->leave($__internal_44f281ad6461103a908a6c818764a1fc6b04786e48cfa16c6f93345aacd08859_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9dc9f47ce9d8fdc398f6dff7e9d93437d871a5d859e96be4b4973be1705320d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc9f47ce9d8fdc398f6dff7e9d93437d871a5d859e96be4b4973be1705320d0->enter($__internal_9dc9f47ce9d8fdc398f6dff7e9d93437d871a5d859e96be4b4973be1705320d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_68b9716b76ebd3821a82d696bd1f59ce6cbf13c70007adb60858ac6bd9bcf039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b9716b76ebd3821a82d696bd1f59ce6cbf13c70007adb60858ac6bd9bcf039->enter($__internal_68b9716b76ebd3821a82d696bd1f59ce6cbf13c70007adb60858ac6bd9bcf039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        input {
            margin: 10px 0px;
        }
    </style>
";
        
        $__internal_68b9716b76ebd3821a82d696bd1f59ce6cbf13c70007adb60858ac6bd9bcf039->leave($__internal_68b9716b76ebd3821a82d696bd1f59ce6cbf13c70007adb60858ac6bd9bcf039_prof);

        
        $__internal_9dc9f47ce9d8fdc398f6dff7e9d93437d871a5d859e96be4b4973be1705320d0->leave($__internal_9dc9f47ce9d8fdc398f6dff7e9d93437d871a5d859e96be4b4973be1705320d0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b502f59b9ffd0d3abbcc3e528a4553e297c35ada52c17b074f65ceb1091ed6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b502f59b9ffd0d3abbcc3e528a4553e297c35ada52c17b074f65ceb1091ed6da->enter($__internal_b502f59b9ffd0d3abbcc3e528a4553e297c35ada52c17b074f65ceb1091ed6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de175ad2bd9558d235e73ae44c206312ba341bf5106711193573d8b02ebcce06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de175ad2bd9558d235e73ae44c206312ba341bf5106711193573d8b02ebcce06->enter($__internal_de175ad2bd9558d235e73ae44c206312ba341bf5106711193573d8b02ebcce06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"container\">
        <h1>URL Shortener</h1>
        <div class=\"well\">
            <div style=\"width: 500px; margin:auto;\">

                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-group"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shorten")));
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "shortenedUrl"), "method")) {
            // line 23
            echo "                    Shortened URL : <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("expand", array("url" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "shortenedUrl"), "method"))), "html", null, true);
            echo "\"
                       target=\"_blank\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "shortenedUrl"), "method"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_de175ad2bd9558d235e73ae44c206312ba341bf5106711193573d8b02ebcce06->leave($__internal_de175ad2bd9558d235e73ae44c206312ba341bf5106711193573d8b02ebcce06_prof);

        
        $__internal_b502f59b9ffd0d3abbcc3e528a4553e297c35ada52c17b074f65ceb1091ed6da->leave($__internal_b502f59b9ffd0d3abbcc3e528a4553e297c35ada52c17b074f65ceb1091ed6da_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  106 => 26,  101 => 24,  99 => 23,  97 => 22,  92 => 20,  88 => 19,  84 => 18,  77 => 13,  68 => 12,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        input {
            margin: 10px 0px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>URL Shortener</h1>
        <div class=\"well\">
            <div style=\"width: 500px; margin:auto;\">

                {{ form_start(form, {'attr': {'class': 'form-group'}, action:path('shorten')}) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}

                {% if app.request.query.get(\"shortenedUrl\") %}
                    Shortened URL : <a href=\"{{ path('expand',
                        { 'url': app.request.query.get(\"shortenedUrl\")}) }}\"
                       target=\"_blank\">
                        {{ app.request.query.get(\"shortenedUrl\") }}
                    </a>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "default/index.html.twig", "/Users/thomas/GitHub/Natae/app/Resources/views/default/index.html.twig");
    }
}
