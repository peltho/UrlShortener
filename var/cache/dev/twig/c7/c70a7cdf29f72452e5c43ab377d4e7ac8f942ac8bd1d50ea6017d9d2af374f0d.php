<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6531444ead0163edc5b0ce7b67b2b7164e092a598d5885e2092e2e990aa6f808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d0e97ec08b1e1151ad0c8f370f6664a3a8047bef696b0fadaf18a91fb10092a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0e97ec08b1e1151ad0c8f370f6664a3a8047bef696b0fadaf18a91fb10092a->enter($__internal_2d0e97ec08b1e1151ad0c8f370f6664a3a8047bef696b0fadaf18a91fb10092a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8ceceb211e899f60532aed1959fb9f6fa91517af72dcd361b3da24ceba801943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ceceb211e899f60532aed1959fb9f6fa91517af72dcd361b3da24ceba801943->enter($__internal_8ceceb211e899f60532aed1959fb9f6fa91517af72dcd361b3da24ceba801943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d0e97ec08b1e1151ad0c8f370f6664a3a8047bef696b0fadaf18a91fb10092a->leave($__internal_2d0e97ec08b1e1151ad0c8f370f6664a3a8047bef696b0fadaf18a91fb10092a_prof);

        
        $__internal_8ceceb211e899f60532aed1959fb9f6fa91517af72dcd361b3da24ceba801943->leave($__internal_8ceceb211e899f60532aed1959fb9f6fa91517af72dcd361b3da24ceba801943_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2eb1a3d097e461c37fc5f58ff7fd2bb7b17e21f80dbe51af013974b1ddc2fe52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb1a3d097e461c37fc5f58ff7fd2bb7b17e21f80dbe51af013974b1ddc2fe52->enter($__internal_2eb1a3d097e461c37fc5f58ff7fd2bb7b17e21f80dbe51af013974b1ddc2fe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a485ff7bb9c5807c1e968bb31d95aaa7aaf6db6f90e84e8ac81dca61c50d2402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a485ff7bb9c5807c1e968bb31d95aaa7aaf6db6f90e84e8ac81dca61c50d2402->enter($__internal_a485ff7bb9c5807c1e968bb31d95aaa7aaf6db6f90e84e8ac81dca61c50d2402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a485ff7bb9c5807c1e968bb31d95aaa7aaf6db6f90e84e8ac81dca61c50d2402->leave($__internal_a485ff7bb9c5807c1e968bb31d95aaa7aaf6db6f90e84e8ac81dca61c50d2402_prof);

        
        $__internal_2eb1a3d097e461c37fc5f58ff7fd2bb7b17e21f80dbe51af013974b1ddc2fe52->leave($__internal_2eb1a3d097e461c37fc5f58ff7fd2bb7b17e21f80dbe51af013974b1ddc2fe52_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b063ba29177ef0c221e934df1d8a3eccb74efa72a7cb35d217bb83623393a6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b063ba29177ef0c221e934df1d8a3eccb74efa72a7cb35d217bb83623393a6cf->enter($__internal_b063ba29177ef0c221e934df1d8a3eccb74efa72a7cb35d217bb83623393a6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bd2d9b07772d9316cd1d859d2e9def74ab9218c63c9674847c139624f6a5dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd2d9b07772d9316cd1d859d2e9def74ab9218c63c9674847c139624f6a5dce->enter($__internal_2bd2d9b07772d9316cd1d859d2e9def74ab9218c63c9674847c139624f6a5dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2bd2d9b07772d9316cd1d859d2e9def74ab9218c63c9674847c139624f6a5dce->leave($__internal_2bd2d9b07772d9316cd1d859d2e9def74ab9218c63c9674847c139624f6a5dce_prof);

        
        $__internal_b063ba29177ef0c221e934df1d8a3eccb74efa72a7cb35d217bb83623393a6cf->leave($__internal_b063ba29177ef0c221e934df1d8a3eccb74efa72a7cb35d217bb83623393a6cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
