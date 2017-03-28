<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f8b58d9a403fd7f1aa50b62cdd58f888adee752d72e966ddfd55f1c661208593 extends Twig_Template
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
        $__internal_a358a230094e98d3437dd4873cf11e37fbf09c1b58a207dfdeaa6d3d084f7339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a358a230094e98d3437dd4873cf11e37fbf09c1b58a207dfdeaa6d3d084f7339->enter($__internal_a358a230094e98d3437dd4873cf11e37fbf09c1b58a207dfdeaa6d3d084f7339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_532edbfb67f7481d051a0073e8cf5a0b40c679c6fc0d077809090c2ad7a48f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532edbfb67f7481d051a0073e8cf5a0b40c679c6fc0d077809090c2ad7a48f8f->enter($__internal_532edbfb67f7481d051a0073e8cf5a0b40c679c6fc0d077809090c2ad7a48f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a358a230094e98d3437dd4873cf11e37fbf09c1b58a207dfdeaa6d3d084f7339->leave($__internal_a358a230094e98d3437dd4873cf11e37fbf09c1b58a207dfdeaa6d3d084f7339_prof);

        
        $__internal_532edbfb67f7481d051a0073e8cf5a0b40c679c6fc0d077809090c2ad7a48f8f->leave($__internal_532edbfb67f7481d051a0073e8cf5a0b40c679c6fc0d077809090c2ad7a48f8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
