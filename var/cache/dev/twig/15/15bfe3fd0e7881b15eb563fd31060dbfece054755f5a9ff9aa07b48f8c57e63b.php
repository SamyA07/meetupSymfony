<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5bf8d28d8517d5ab10f2f4a61e972d5cb09ce1cecff06a51576d101bc3aeeaa7 extends Twig_Template
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
        $__internal_a5bc7a63a606be34d11e9b42524299d45abb911685c10ea15c599a702d5dd1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bc7a63a606be34d11e9b42524299d45abb911685c10ea15c599a702d5dd1cd->enter($__internal_a5bc7a63a606be34d11e9b42524299d45abb911685c10ea15c599a702d5dd1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1066515b2c72d23dd92dec45c2dde981154e4de8b2c563954a8c56fbf51a60e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1066515b2c72d23dd92dec45c2dde981154e4de8b2c563954a8c56fbf51a60e1->enter($__internal_1066515b2c72d23dd92dec45c2dde981154e4de8b2c563954a8c56fbf51a60e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a5bc7a63a606be34d11e9b42524299d45abb911685c10ea15c599a702d5dd1cd->leave($__internal_a5bc7a63a606be34d11e9b42524299d45abb911685c10ea15c599a702d5dd1cd_prof);

        
        $__internal_1066515b2c72d23dd92dec45c2dde981154e4de8b2c563954a8c56fbf51a60e1->leave($__internal_1066515b2c72d23dd92dec45c2dde981154e4de8b2c563954a8c56fbf51a60e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
", "@Framework/FormTable/form_row.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
