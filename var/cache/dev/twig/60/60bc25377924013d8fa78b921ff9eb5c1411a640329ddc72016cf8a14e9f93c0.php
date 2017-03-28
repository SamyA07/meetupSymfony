<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_4ba4eff9e32cf6730ab53ce2f962bfec67a55766aeb448acc3b051a68b482785 extends Twig_Template
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
        $__internal_8c91a66fde60f5b0b093c73974ec01efa523e94e124a16a2f314fd0bccf6e1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c91a66fde60f5b0b093c73974ec01efa523e94e124a16a2f314fd0bccf6e1b3->enter($__internal_8c91a66fde60f5b0b093c73974ec01efa523e94e124a16a2f314fd0bccf6e1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_c6f045fa4269932e9aefe799d446cd3f91bbc0cb4f831a60f2a3336f7169abad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f045fa4269932e9aefe799d446cd3f91bbc0cb4f831a60f2a3336f7169abad->enter($__internal_c6f045fa4269932e9aefe799d446cd3f91bbc0cb4f831a60f2a3336f7169abad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_8c91a66fde60f5b0b093c73974ec01efa523e94e124a16a2f314fd0bccf6e1b3->leave($__internal_8c91a66fde60f5b0b093c73974ec01efa523e94e124a16a2f314fd0bccf6e1b3_prof);

        
        $__internal_c6f045fa4269932e9aefe799d446cd3f91bbc0cb4f831a60f2a3336f7169abad->leave($__internal_c6f045fa4269932e9aefe799d446cd3f91bbc0cb4f831a60f2a3336f7169abad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
