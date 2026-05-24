<?php

if (empty($galleryData['images'])) return;

$folder = htmlspecialchars($galleryData['folder'] ?? '');
$title  = $galleryData['title'] ?? 'Project Gallery';
$images = $galleryData['images'];
?>

<!-- GALLERY -->
<section class="gallery-section reveal">
    <div class="gallery-header">
        <div class="section-label">Gallery</div>
        <h2 class="gallery-title"><?= htmlspecialchars($title) ?></h2>
    </div>

    <div class="gallery-grid">
        <?php foreach ($images as $i => $img): ?>
            <div class="gallery-item" tabindex="0" data-index="<?= $i ?>">
                <img
                    src="<?= BASE_URL ?>assets/img/<?= $folder ?>/<?= htmlspecialchars($img['file']) ?>"
                    alt="<?= htmlspecialchars($img['alt'] ?? '') ?>"
                    loading="lazy" />
                <div class="gallery-overlay">
                    <span class="gallery-zoom-icon">&#xe8ff;</span>
                </div>
                <?php if (!empty($img['caption'])): ?>
                    <div class="gallery-caption"><?= htmlspecialchars($img['caption']) ?></div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- LIGHTBOX (shared, rendered once) -->
<?php if (empty($GLOBALS['__gallery_lightbox_rendered'])): ?>
    <?php $GLOBALS['__gallery_lightbox_rendered'] = true; ?>
    <div class="gallery-lightbox" id="galleryLightbox" aria-hidden="true">
        <button class="lightbox-close" aria-label="Close lightbox">&times;</button>
        <button class="lightbox-prev" aria-label="Previous image">&#8592;</button>
        <button class="lightbox-next" aria-label="Next image">&#8594;</button>
        <div class="lightbox-img-wrap">
            <img src="" alt="" id="lightboxImg" />
        </div>
    </div>
    <script>
        (function() {
            const lb = document.getElementById('galleryLightbox');
            const lbImg = document.getElementById('lightboxImg');
            let items = [];
            let idx = 0;

            function collectItems() {
                items = Array.from(document.querySelectorAll('.gallery-item'));
            }

            function open(i) {
                collectItems();
                idx = i;
                const src = items[idx].querySelector('img').src;
                const alt = items[idx].querySelector('img').alt;
                lbImg.src = src;
                lbImg.alt = alt;
                lb.classList.add('active');
                lb.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            }

            function close() {
                lb.classList.remove('active');
                lb.setAttribute('aria-hidden', 'true');
                lbImg.src = '';
                document.body.style.overflow = '';
            }

            function nav(dir) {
                collectItems();
                idx = (idx + dir + items.length) % items.length;
                const src = items[idx].querySelector('img').src;
                const alt = items[idx].querySelector('img').alt;
                lbImg.src = src;
                lbImg.alt = alt;
            }

            document.addEventListener('click', function(e) {
                const item = e.target.closest('.gallery-item');
                if (item) {
                    collectItems();
                    open(items.indexOf(item));
                    return;
                }
                if (e.target.closest('.lightbox-close') || e.target === lb) {
                    close();
                }
                if (e.target.closest('.lightbox-prev')) {
                    nav(-1);
                }
                if (e.target.closest('.lightbox-next')) {
                    nav(1);
                }
            });

            document.addEventListener('keydown', function(e) {
                if (!lb.classList.contains('active')) return;
                if (e.key === 'Escape') close();
                if (e.key === 'ArrowLeft') nav(-1);
                if (e.key === 'ArrowRight') nav(1);
            });
        })();
    </script>
<?php endif; ?>