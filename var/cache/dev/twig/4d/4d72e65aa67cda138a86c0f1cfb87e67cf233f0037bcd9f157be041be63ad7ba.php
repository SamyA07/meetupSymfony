<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_253d3d756f45bdaa51bc5bd18db4e246c7b9e682ef7eda1a4609d4cc0a62e467 extends Twig_Template
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
        $__internal_ebf612ee6b919faed128e291abc6ee962bbf6aa74b2e9cd3f24644272504bc8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf612ee6b919faed128e291abc6ee962bbf6aa74b2e9cd3f24644272504bc8e->enter($__internal_ebf612ee6b919faed128e291abc6ee962bbf6aa74b2e9cd3f24644272504bc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c351a8ec30de2967146ffa7e286bbaf8f8136bd719e2cf9a5fde49ebe0949b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c351a8ec30de2967146ffa7e286bbaf8f8136bd719e2cf9a5fde49ebe0949b91->enter($__internal_c351a8ec30de2967146ffa7e286bbaf8f8136bd719e2cf9a5fde49ebe0949b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ebf612ee6b919faed128e291abc6ee962bbf6aa74b2e9cd3f24644272504bc8e->leave($__internal_ebf612ee6b919faed128e291abc6ee962bbf6aa74b2e9cd3f24644272504bc8e_prof);

        
        $__internal_c351a8ec30de2967146ffa7e286bbaf8f8136bd719e2cf9a5fde49ebe0949b91->leave($__internal_c351a8ec30de2967146ffa7e286bbaf8f8136bd719e2cf9a5fde49ebe0949b91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
