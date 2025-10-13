<!-- Student note: Basic button - uses .btn-main CSS, add class for variations like cta-button -->
<a href="<?= $href ?>" class="btn-main <?= $class ?? '' ?>"><?= $label ?></a>
<!-- Usage: <?= view('components/button', ['label' => 'Text', 'href' => 'link', 'class' => 'cta-button']) ?> -->
