<?php

/* default/index.html.twig */
class __TwigTemplate_603c7cbca7ddf03b2a9aff0b786526f54f28e9cdca3b75bd865fbd4329903d82 extends Twig_Template
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
        $__internal_605bbf3c7520fd4645c41af4db792b23f39abfc0a4d294d20aa9af0eefa4d793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605bbf3c7520fd4645c41af4db792b23f39abfc0a4d294d20aa9af0eefa4d793->enter($__internal_605bbf3c7520fd4645c41af4db792b23f39abfc0a4d294d20aa9af0eefa4d793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_5f28868c4a58cc52923b567642a87f1b221bedb10fee076fa947588b95c4c702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f28868c4a58cc52923b567642a87f1b221bedb10fee076fa947588b95c4c702->enter($__internal_5f28868c4a58cc52923b567642a87f1b221bedb10fee076fa947588b95c4c702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605bbf3c7520fd4645c41af4db792b23f39abfc0a4d294d20aa9af0eefa4d793->leave($__internal_605bbf3c7520fd4645c41af4db792b23f39abfc0a4d294d20aa9af0eefa4d793_prof);

        
        $__internal_5f28868c4a58cc52923b567642a87f1b221bedb10fee076fa947588b95c4c702->leave($__internal_5f28868c4a58cc52923b567642a87f1b221bedb10fee076fa947588b95c4c702_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d03366567e2b38bb7ce4ea016e73923219e154879521bf5c5e13cccbaf34793d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03366567e2b38bb7ce4ea016e73923219e154879521bf5c5e13cccbaf34793d->enter($__internal_d03366567e2b38bb7ce4ea016e73923219e154879521bf5c5e13cccbaf34793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_54016aa5ae2ef388999e53b9eb784fab477a188692b97de5f88eb97fa3a5e29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54016aa5ae2ef388999e53b9eb784fab477a188692b97de5f88eb97fa3a5e29b->enter($__internal_54016aa5ae2ef388999e53b9eb784fab477a188692b97de5f88eb97fa3a5e29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_54016aa5ae2ef388999e53b9eb784fab477a188692b97de5f88eb97fa3a5e29b->leave($__internal_54016aa5ae2ef388999e53b9eb784fab477a188692b97de5f88eb97fa3a5e29b_prof);

        
        $__internal_d03366567e2b38bb7ce4ea016e73923219e154879521bf5c5e13cccbaf34793d->leave($__internal_d03366567e2b38bb7ce4ea016e73923219e154879521bf5c5e13cccbaf34793d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_725d1175ed4724947d6f79c5efebe07ff1b4ef626273f9dab9387119b06bb06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725d1175ed4724947d6f79c5efebe07ff1b4ef626273f9dab9387119b06bb06a->enter($__internal_725d1175ed4724947d6f79c5efebe07ff1b4ef626273f9dab9387119b06bb06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10c9a9cbd6ef38a950e29b6bd899991df295f0662a549893d2c3f6190a3e5192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c9a9cbd6ef38a950e29b6bd899991df295f0662a549893d2c3f6190a3e5192->enter($__internal_10c9a9cbd6ef38a950e29b6bd899991df295f0662a549893d2c3f6190a3e5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10c9a9cbd6ef38a950e29b6bd899991df295f0662a549893d2c3f6190a3e5192->leave($__internal_10c9a9cbd6ef38a950e29b6bd899991df295f0662a549893d2c3f6190a3e5192_prof);

        
        $__internal_725d1175ed4724947d6f79c5efebe07ff1b4ef626273f9dab9387119b06bb06a->leave($__internal_725d1175ed4724947d6f79c5efebe07ff1b4ef626273f9dab9387119b06bb06a_prof);

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
