<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6fa2d319849af131b36cd300e53481146c0fc8166ab8b78fe1934ee25d9bbd73 extends Twig_Template
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
        $__internal_0032b6adbf88e144f904478a83ed5dd58a7b29d4b0f1d627275512e20874fa54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0032b6adbf88e144f904478a83ed5dd58a7b29d4b0f1d627275512e20874fa54->enter($__internal_0032b6adbf88e144f904478a83ed5dd58a7b29d4b0f1d627275512e20874fa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_70683a853d0ca47198ce90aead081ac7bc05d0bd77f651c84c96cb4622cbc783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70683a853d0ca47198ce90aead081ac7bc05d0bd77f651c84c96cb4622cbc783->enter($__internal_70683a853d0ca47198ce90aead081ac7bc05d0bd77f651c84c96cb4622cbc783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0032b6adbf88e144f904478a83ed5dd58a7b29d4b0f1d627275512e20874fa54->leave($__internal_0032b6adbf88e144f904478a83ed5dd58a7b29d4b0f1d627275512e20874fa54_prof);

        
        $__internal_70683a853d0ca47198ce90aead081ac7bc05d0bd77f651c84c96cb4622cbc783->leave($__internal_70683a853d0ca47198ce90aead081ac7bc05d0bd77f651c84c96cb4622cbc783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
