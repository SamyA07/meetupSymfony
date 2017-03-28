<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1c12fca0c39681d7dc69828c68570ce9d59e0f2e5484fe91e4f181833dde4259 extends Twig_Template
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
        $__internal_2b8823956e2fbb835c9572a935f8b3dc362a3bdbc8a1d23737983792bf332df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8823956e2fbb835c9572a935f8b3dc362a3bdbc8a1d23737983792bf332df2->enter($__internal_2b8823956e2fbb835c9572a935f8b3dc362a3bdbc8a1d23737983792bf332df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4db7032d6a225808dd5e8646bb7c28d2eb8f7896df21787ee8166415984889a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db7032d6a225808dd5e8646bb7c28d2eb8f7896df21787ee8166415984889a4->enter($__internal_4db7032d6a225808dd5e8646bb7c28d2eb8f7896df21787ee8166415984889a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2b8823956e2fbb835c9572a935f8b3dc362a3bdbc8a1d23737983792bf332df2->leave($__internal_2b8823956e2fbb835c9572a935f8b3dc362a3bdbc8a1d23737983792bf332df2_prof);

        
        $__internal_4db7032d6a225808dd5e8646bb7c28d2eb8f7896df21787ee8166415984889a4->leave($__internal_4db7032d6a225808dd5e8646bb7c28d2eb8f7896df21787ee8166415984889a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
