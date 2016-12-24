<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_4c7ed901ee7c6117a67a4ca6e371897222c3a19775373d5716628f7c32faa1b1 extends Twig_Template
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
        $__internal_eaa9443d124fca930aee6bd8cc24cdb52a34ef938174a1e4e3b2c84dbb8fe4eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa9443d124fca930aee6bd8cc24cdb52a34ef938174a1e4e3b2c84dbb8fe4eb->enter($__internal_eaa9443d124fca930aee6bd8cc24cdb52a34ef938174a1e4e3b2c84dbb8fe4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_48f36d0f570d65a7681a80514430b9209e1fde487bf263be8f7e371efa0fab2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f36d0f570d65a7681a80514430b9209e1fde487bf263be8f7e371efa0fab2e->enter($__internal_48f36d0f570d65a7681a80514430b9209e1fde487bf263be8f7e371efa0fab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_eaa9443d124fca930aee6bd8cc24cdb52a34ef938174a1e4e3b2c84dbb8fe4eb->leave($__internal_eaa9443d124fca930aee6bd8cc24cdb52a34ef938174a1e4e3b2c84dbb8fe4eb_prof);

        
        $__internal_48f36d0f570d65a7681a80514430b9209e1fde487bf263be8f7e371efa0fab2e->leave($__internal_48f36d0f570d65a7681a80514430b9209e1fde487bf263be8f7e371efa0fab2e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
