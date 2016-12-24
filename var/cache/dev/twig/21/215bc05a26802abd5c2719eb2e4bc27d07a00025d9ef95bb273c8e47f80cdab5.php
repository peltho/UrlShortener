<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b0928880b95e6e41bc8da2a66a3fe74aa0f108b47cfd43b1fd15bb63604602d7 extends Twig_Template
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
        $__internal_cb8ca7c6307d463f73f88d7c3979a960339801d6f4682ad45afcccb3eb952df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8ca7c6307d463f73f88d7c3979a960339801d6f4682ad45afcccb3eb952df3->enter($__internal_cb8ca7c6307d463f73f88d7c3979a960339801d6f4682ad45afcccb3eb952df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1c2227ebb5e59a1319a815cbc1b24ce5497abf14da6312db2dd5061d02e08df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2227ebb5e59a1319a815cbc1b24ce5497abf14da6312db2dd5061d02e08df0->enter($__internal_1c2227ebb5e59a1319a815cbc1b24ce5497abf14da6312db2dd5061d02e08df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_cb8ca7c6307d463f73f88d7c3979a960339801d6f4682ad45afcccb3eb952df3->leave($__internal_cb8ca7c6307d463f73f88d7c3979a960339801d6f4682ad45afcccb3eb952df3_prof);

        
        $__internal_1c2227ebb5e59a1319a815cbc1b24ce5497abf14da6312db2dd5061d02e08df0->leave($__internal_1c2227ebb5e59a1319a815cbc1b24ce5497abf14da6312db2dd5061d02e08df0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
