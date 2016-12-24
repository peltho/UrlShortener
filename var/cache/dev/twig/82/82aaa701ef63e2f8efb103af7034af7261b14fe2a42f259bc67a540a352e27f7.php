<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b60d08dddd832a0898df67b4d9182f85cfefeb4cf3e198e74da1e9467d5bd4f3 extends Twig_Template
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
        $__internal_5efec3495accc67765dda4e03a00632daa99256e0990e97973f88acd86905deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efec3495accc67765dda4e03a00632daa99256e0990e97973f88acd86905deb->enter($__internal_5efec3495accc67765dda4e03a00632daa99256e0990e97973f88acd86905deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_62c3d1f456e81d3f09015d124c2bb3ad83ef3ef85b71d84615c2b890b1b16a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c3d1f456e81d3f09015d124c2bb3ad83ef3ef85b71d84615c2b890b1b16a21->enter($__internal_62c3d1f456e81d3f09015d124c2bb3ad83ef3ef85b71d84615c2b890b1b16a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5efec3495accc67765dda4e03a00632daa99256e0990e97973f88acd86905deb->leave($__internal_5efec3495accc67765dda4e03a00632daa99256e0990e97973f88acd86905deb_prof);

        
        $__internal_62c3d1f456e81d3f09015d124c2bb3ad83ef3ef85b71d84615c2b890b1b16a21->leave($__internal_62c3d1f456e81d3f09015d124c2bb3ad83ef3ef85b71d84615c2b890b1b16a21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/thomas/GitHub/Natae/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
