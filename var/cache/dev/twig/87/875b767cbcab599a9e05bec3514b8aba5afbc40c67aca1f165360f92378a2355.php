<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_598e7b25429f8f8d4dc664ad92b043c95c3f0be411c7f13cec64efd1f3b24064 extends Twig_Template
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
        $__internal_a1776da08ccae0c621276246c1d2e460ead5564f3da9d372e9fac18cd8f82f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1776da08ccae0c621276246c1d2e460ead5564f3da9d372e9fac18cd8f82f8d->enter($__internal_a1776da08ccae0c621276246c1d2e460ead5564f3da9d372e9fac18cd8f82f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c721637a81f84fdb5de3f01348fca9d47f0c36bdabda4592241da35fc3c9694f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c721637a81f84fdb5de3f01348fca9d47f0c36bdabda4592241da35fc3c9694f->enter($__internal_c721637a81f84fdb5de3f01348fca9d47f0c36bdabda4592241da35fc3c9694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a1776da08ccae0c621276246c1d2e460ead5564f3da9d372e9fac18cd8f82f8d->leave($__internal_a1776da08ccae0c621276246c1d2e460ead5564f3da9d372e9fac18cd8f82f8d_prof);

        
        $__internal_c721637a81f84fdb5de3f01348fca9d47f0c36bdabda4592241da35fc3c9694f->leave($__internal_c721637a81f84fdb5de3f01348fca9d47f0c36bdabda4592241da35fc3c9694f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
