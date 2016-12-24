<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dd909c747434b4b23bb77dfa24ae8c39cb2a68f375fbcbb52d5977072b82312d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_394602461329d2f960d361e4249420d814355b3e8635e093bfbc2129c2627de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394602461329d2f960d361e4249420d814355b3e8635e093bfbc2129c2627de0->enter($__internal_394602461329d2f960d361e4249420d814355b3e8635e093bfbc2129c2627de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7fb7debb9e23103dc3f300c19df90fb9643fa49296e164033504a891e71773e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb7debb9e23103dc3f300c19df90fb9643fa49296e164033504a891e71773e3->enter($__internal_7fb7debb9e23103dc3f300c19df90fb9643fa49296e164033504a891e71773e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394602461329d2f960d361e4249420d814355b3e8635e093bfbc2129c2627de0->leave($__internal_394602461329d2f960d361e4249420d814355b3e8635e093bfbc2129c2627de0_prof);

        
        $__internal_7fb7debb9e23103dc3f300c19df90fb9643fa49296e164033504a891e71773e3->leave($__internal_7fb7debb9e23103dc3f300c19df90fb9643fa49296e164033504a891e71773e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b35afca6e5b63a3e21dcba30439b25813556d1140ecfac35d9202223d8b17a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35afca6e5b63a3e21dcba30439b25813556d1140ecfac35d9202223d8b17a98->enter($__internal_b35afca6e5b63a3e21dcba30439b25813556d1140ecfac35d9202223d8b17a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_adc5d8a637bbb31a24eb2c70f0d643f9cb920ad8151f7f9f0ece4bd9e045f567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc5d8a637bbb31a24eb2c70f0d643f9cb920ad8151f7f9f0ece4bd9e045f567->enter($__internal_adc5d8a637bbb31a24eb2c70f0d643f9cb920ad8151f7f9f0ece4bd9e045f567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_adc5d8a637bbb31a24eb2c70f0d643f9cb920ad8151f7f9f0ece4bd9e045f567->leave($__internal_adc5d8a637bbb31a24eb2c70f0d643f9cb920ad8151f7f9f0ece4bd9e045f567_prof);

        
        $__internal_b35afca6e5b63a3e21dcba30439b25813556d1140ecfac35d9202223d8b17a98->leave($__internal_b35afca6e5b63a3e21dcba30439b25813556d1140ecfac35d9202223d8b17a98_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba7d9c1388effc0040118a84084c6be8ad4c16d97b524e2f32ef1cad7e5bbfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7d9c1388effc0040118a84084c6be8ad4c16d97b524e2f32ef1cad7e5bbfab->enter($__internal_ba7d9c1388effc0040118a84084c6be8ad4c16d97b524e2f32ef1cad7e5bbfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2eef1f862f1372cbbe37c6d633b3fc790b1194c2d1cd6861d1234a52db2792d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eef1f862f1372cbbe37c6d633b3fc790b1194c2d1cd6861d1234a52db2792d3->enter($__internal_2eef1f862f1372cbbe37c6d633b3fc790b1194c2d1cd6861d1234a52db2792d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2eef1f862f1372cbbe37c6d633b3fc790b1194c2d1cd6861d1234a52db2792d3->leave($__internal_2eef1f862f1372cbbe37c6d633b3fc790b1194c2d1cd6861d1234a52db2792d3_prof);

        
        $__internal_ba7d9c1388effc0040118a84084c6be8ad4c16d97b524e2f32ef1cad7e5bbfab->leave($__internal_ba7d9c1388effc0040118a84084c6be8ad4c16d97b524e2f32ef1cad7e5bbfab_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_db207323d69b7f4589f79ce081f71733dfa278096006fba43ee1e453ca27e753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db207323d69b7f4589f79ce081f71733dfa278096006fba43ee1e453ca27e753->enter($__internal_db207323d69b7f4589f79ce081f71733dfa278096006fba43ee1e453ca27e753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0f556a53ef76784cbf80947c33dc6756ec1b229877dc59230dd05827dea6556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f556a53ef76784cbf80947c33dc6756ec1b229877dc59230dd05827dea6556->enter($__internal_d0f556a53ef76784cbf80947c33dc6756ec1b229877dc59230dd05827dea6556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d0f556a53ef76784cbf80947c33dc6756ec1b229877dc59230dd05827dea6556->leave($__internal_d0f556a53ef76784cbf80947c33dc6756ec1b229877dc59230dd05827dea6556_prof);

        
        $__internal_db207323d69b7f4589f79ce081f71733dfa278096006fba43ee1e453ca27e753->leave($__internal_db207323d69b7f4589f79ce081f71733dfa278096006fba43ee1e453ca27e753_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
