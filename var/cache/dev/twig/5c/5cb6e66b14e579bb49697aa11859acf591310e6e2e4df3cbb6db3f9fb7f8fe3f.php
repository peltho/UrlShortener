<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1ae041d4ef176ff6a9f902d979548eb96df87e11d8a04a98ee994b4b33c9ae7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_081b0f379b216506fabb6623027ac05dfb6288cc1d455543281503a29bdb5c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081b0f379b216506fabb6623027ac05dfb6288cc1d455543281503a29bdb5c52->enter($__internal_081b0f379b216506fabb6623027ac05dfb6288cc1d455543281503a29bdb5c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6829467e35abbf6d69869bd10bea7a347c3ffe892d8850af5586fd6752535eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6829467e35abbf6d69869bd10bea7a347c3ffe892d8850af5586fd6752535eab->enter($__internal_6829467e35abbf6d69869bd10bea7a347c3ffe892d8850af5586fd6752535eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_081b0f379b216506fabb6623027ac05dfb6288cc1d455543281503a29bdb5c52->leave($__internal_081b0f379b216506fabb6623027ac05dfb6288cc1d455543281503a29bdb5c52_prof);

        
        $__internal_6829467e35abbf6d69869bd10bea7a347c3ffe892d8850af5586fd6752535eab->leave($__internal_6829467e35abbf6d69869bd10bea7a347c3ffe892d8850af5586fd6752535eab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d1935f480d86632aeae411a4628fc52ce6890bef5b124a504c690d64634cb07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1935f480d86632aeae411a4628fc52ce6890bef5b124a504c690d64634cb07->enter($__internal_9d1935f480d86632aeae411a4628fc52ce6890bef5b124a504c690d64634cb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b20059f50cc24f7c3dc5a2299f82eddf3b2582db6b2b4ba041918f219ed22733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20059f50cc24f7c3dc5a2299f82eddf3b2582db6b2b4ba041918f219ed22733->enter($__internal_b20059f50cc24f7c3dc5a2299f82eddf3b2582db6b2b4ba041918f219ed22733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b20059f50cc24f7c3dc5a2299f82eddf3b2582db6b2b4ba041918f219ed22733->leave($__internal_b20059f50cc24f7c3dc5a2299f82eddf3b2582db6b2b4ba041918f219ed22733_prof);

        
        $__internal_9d1935f480d86632aeae411a4628fc52ce6890bef5b124a504c690d64634cb07->leave($__internal_9d1935f480d86632aeae411a4628fc52ce6890bef5b124a504c690d64634cb07_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
