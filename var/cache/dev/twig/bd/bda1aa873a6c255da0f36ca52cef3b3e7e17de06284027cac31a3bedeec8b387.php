<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b6d0cd2008afda9e72bf292b09ff9aba9e089f53a8620393b4e731ac68514ee8 extends Twig_Template
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
        $__internal_2c1aaba67b1f65e8292104c1cc89127c7bc5557e774ad38bb089f23dfa16b15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1aaba67b1f65e8292104c1cc89127c7bc5557e774ad38bb089f23dfa16b15c->enter($__internal_2c1aaba67b1f65e8292104c1cc89127c7bc5557e774ad38bb089f23dfa16b15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c0f975c6e2093f42ff25d493b33d772de0d6cf4b2689f212c675036f1a9145cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f975c6e2093f42ff25d493b33d772de0d6cf4b2689f212c675036f1a9145cd->enter($__internal_c0f975c6e2093f42ff25d493b33d772de0d6cf4b2689f212c675036f1a9145cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_2c1aaba67b1f65e8292104c1cc89127c7bc5557e774ad38bb089f23dfa16b15c->leave($__internal_2c1aaba67b1f65e8292104c1cc89127c7bc5557e774ad38bb089f23dfa16b15c_prof);

        
        $__internal_c0f975c6e2093f42ff25d493b33d772de0d6cf4b2689f212c675036f1a9145cd->leave($__internal_c0f975c6e2093f42ff25d493b33d772de0d6cf4b2689f212c675036f1a9145cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
