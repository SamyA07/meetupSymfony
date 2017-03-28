<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_38d80ba4d22f11ab5771f1a140a698a93081f16c40ec8e323545a08ae123c8e2 extends Twig_Template
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
        $__internal_0a0135ac305ed8b50e7d1b385509cda473326c57432fa6044800fed23be9da7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0135ac305ed8b50e7d1b385509cda473326c57432fa6044800fed23be9da7c->enter($__internal_0a0135ac305ed8b50e7d1b385509cda473326c57432fa6044800fed23be9da7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_09e0e7ad9dac651d7c23d57e874643d382b5bbf0574841c3eb0a075c7cfff7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e0e7ad9dac651d7c23d57e874643d382b5bbf0574841c3eb0a075c7cfff7ea->enter($__internal_09e0e7ad9dac651d7c23d57e874643d382b5bbf0574841c3eb0a075c7cfff7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0a0135ac305ed8b50e7d1b385509cda473326c57432fa6044800fed23be9da7c->leave($__internal_0a0135ac305ed8b50e7d1b385509cda473326c57432fa6044800fed23be9da7c_prof);

        
        $__internal_09e0e7ad9dac651d7c23d57e874643d382b5bbf0574841c3eb0a075c7cfff7ea->leave($__internal_09e0e7ad9dac651d7c23d57e874643d382b5bbf0574841c3eb0a075c7cfff7ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
