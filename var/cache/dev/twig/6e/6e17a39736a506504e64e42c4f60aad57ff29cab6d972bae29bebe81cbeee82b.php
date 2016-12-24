<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_362f53ffc1d54922a67f9ce7d388ec7e58c4e71f845439b11f75bc5e27614bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362f53ffc1d54922a67f9ce7d388ec7e58c4e71f845439b11f75bc5e27614bdd->enter($__internal_362f53ffc1d54922a67f9ce7d388ec7e58c4e71f845439b11f75bc5e27614bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a9bc6518dfd4f993a64cbca15f911f09d8921027cd2e13dff676727ba042abb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bc6518dfd4f993a64cbca15f911f09d8921027cd2e13dff676727ba042abb3->enter($__internal_a9bc6518dfd4f993a64cbca15f911f09d8921027cd2e13dff676727ba042abb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock("body", $context, $blocks);
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_362f53ffc1d54922a67f9ce7d388ec7e58c4e71f845439b11f75bc5e27614bdd->leave($__internal_362f53ffc1d54922a67f9ce7d388ec7e58c4e71f845439b11f75bc5e27614bdd_prof);

        
        $__internal_a9bc6518dfd4f993a64cbca15f911f09d8921027cd2e13dff676727ba042abb3->leave($__internal_a9bc6518dfd4f993a64cbca15f911f09d8921027cd2e13dff676727ba042abb3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ff5ec84e52c311fd4cd3e075dae4942b4f9348af672fbd43095d9c578c3388e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff5ec84e52c311fd4cd3e075dae4942b4f9348af672fbd43095d9c578c3388e->enter($__internal_4ff5ec84e52c311fd4cd3e075dae4942b4f9348af672fbd43095d9c578c3388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bc68712b46333efab96e55de1e350226e8b7ba0c1aa1d34342ef3642d791e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc68712b46333efab96e55de1e350226e8b7ba0c1aa1d34342ef3642d791e31->enter($__internal_7bc68712b46333efab96e55de1e350226e8b7ba0c1aa1d34342ef3642d791e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Natae - Test";
        
        $__internal_7bc68712b46333efab96e55de1e350226e8b7ba0c1aa1d34342ef3642d791e31->leave($__internal_7bc68712b46333efab96e55de1e350226e8b7ba0c1aa1d34342ef3642d791e31_prof);

        
        $__internal_4ff5ec84e52c311fd4cd3e075dae4942b4f9348af672fbd43095d9c578c3388e->leave($__internal_4ff5ec84e52c311fd4cd3e075dae4942b4f9348af672fbd43095d9c578c3388e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5090e3fa3166d0c70686ca04538b0f3c1220cc28beecdfb72c336f369c5eef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5090e3fa3166d0c70686ca04538b0f3c1220cc28beecdfb72c336f369c5eef3->enter($__internal_a5090e3fa3166d0c70686ca04538b0f3c1220cc28beecdfb72c336f369c5eef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c7577bcf9ed042797b913e887ef0020fa0868df2f3749b04f74346e3b2fa7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7577bcf9ed042797b913e887ef0020fa0868df2f3749b04f74346e3b2fa7d8->enter($__internal_5c7577bcf9ed042797b913e887ef0020fa0868df2f3749b04f74346e3b2fa7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_5c7577bcf9ed042797b913e887ef0020fa0868df2f3749b04f74346e3b2fa7d8->leave($__internal_5c7577bcf9ed042797b913e887ef0020fa0868df2f3749b04f74346e3b2fa7d8_prof);

        
        $__internal_a5090e3fa3166d0c70686ca04538b0f3c1220cc28beecdfb72c336f369c5eef3->leave($__internal_a5090e3fa3166d0c70686ca04538b0f3c1220cc28beecdfb72c336f369c5eef3_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d58f083baf7a0ef5f55f50610405db2d56dca0ca90d29f4e90fe8042e365d01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58f083baf7a0ef5f55f50610405db2d56dca0ca90d29f4e90fe8042e365d01a->enter($__internal_d58f083baf7a0ef5f55f50610405db2d56dca0ca90d29f4e90fe8042e365d01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1bc9107a4a2c89965acff2ba53ac2093bd6d76670876f9b9968d19d3979821ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc9107a4a2c89965acff2ba53ac2093bd6d76670876f9b9968d19d3979821ef->enter($__internal_1bc9107a4a2c89965acff2ba53ac2093bd6d76670876f9b9968d19d3979821ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "        ";
        
        $__internal_1bc9107a4a2c89965acff2ba53ac2093bd6d76670876f9b9968d19d3979821ef->leave($__internal_1bc9107a4a2c89965acff2ba53ac2093bd6d76670876f9b9968d19d3979821ef_prof);

        
        $__internal_d58f083baf7a0ef5f55f50610405db2d56dca0ca90d29f4e90fe8042e365d01a->leave($__internal_d58f083baf7a0ef5f55f50610405db2d56dca0ca90d29f4e90fe8042e365d01a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 15,  114 => 14,  105 => 13,  92 => 7,  83 => 6,  65 => 5,  53 => 16,  51 => 13,  47 => 12,  40 => 9,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Natae - Test{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {{ block('body') }}
        {% block javascripts %}
            {#<script src=\"{{ asset('') }}\"></script>#}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/thomas/GitHub/Natae/app/Resources/views/base.html.twig");
    }
}
