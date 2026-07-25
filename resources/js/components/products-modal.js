/**
 * Featured Products Quick View & Comparison Modal Component
 */

const PRODUCTS_DATA = {
    1: {
        id: 1,
        name: "Howo v7-x Dump Truck",
        category: "Heavy Duty Dump Truck / 10-Wheeler",
        image: "/images/products/product-truck-1.png",
        desc: "Engineered for high performance, maximum durability, and superior fuel economy in demanding mining and construction operations.",
        specs: {
            engine: "SINOTRUK WD615.47 Euro IV",
            hp: "371 HP @ 2200rpm",
            payload: "30 Tons",
            trans: "HW19710 10-Speed Manual",
            axle: "6x4 Heavy Duty Axle",
            fuel: "400L Aluminum Tank",
            cabin: "HW76 Extended Sleeper Cab"
        }
    },
    2: {
        id: 2,
        name: "Howo v7 Dump Truck",
        category: "Mining & Construction Dump Truck",
        image: "/images/products/product-truck-2.png",
        desc: "Built with reinforced chassis steel and heavy-duty suspension for heavy loads and rugged terrain transportation.",
        specs: {
            engine: "SINOTRUK D10.38 Euro V",
            hp: "380 HP @ 2100rpm",
            payload: "35 Tons",
            trans: "HW19712 12-Speed Manual",
            axle: "6x4 Reinforced Reduction Axle",
            fuel: "400L High-Capacity Tank",
            cabin: "V7 Comfort Ergonomic Cab"
        }
    },
    3: {
        id: 3,
        name: "Howo TX Dump Truck",
        category: "Premium Highway & Mining Dump Truck",
        image: "/images/products/product-truck-3.png",
        desc: "Equipped with German MAN Technology engine and transmission for maximum power output and ultra-low maintenance.",
        specs: {
            engine: "MAN Tech MC11.44 Euro V",
            hp: "440 HP @ 1900rpm",
            payload: "40 Tons",
            trans: "HW25712XST 12-Speed",
            axle: "8x4 Heavy Payload Axle",
            fuel: "500L Aluminum Alloy Tank",
            cabin: "TX High-Roof Luxury Sleeper"
        }
    },
    4: {
        id: 4,
        name: "Howo A7 | T7 Prime Mover",
        category: "Long-Haul Tractor Head / Prime Mover",
        image: "/images/products/product-truck-4.png",
        desc: "Top-of-the-line heavy tractor head designed for long-distance container and trailer hauling across island routes.",
        specs: {
            engine: "SINOTRUK D12.42 Euro V",
            hp: "420 HP @ 2000rpm",
            payload: "50 Tons GCVW",
            trans: "HW19712CL 12-Speed AMT",
            axle: "6x4 Air Suspension Axle",
            fuel: "600L Dual Aluminum Tank",
            cabin: "A7 High-Roof Double Sleeper"
        }
    },
    5: {
        id: 5,
        name: "Howo 7 Prime Truck",
        category: "Heavy Cargo & Logistics Prime Mover",
        image: "/images/products/product-truck-5.png",
        desc: "Reliable workhorse tractor head featuring proven SINOTRUK drivetrain and heavy-duty fifth wheel coupling.",
        specs: {
            engine: "SINOTRUK WD615.96E Euro IV",
            hp: "375 HP @ 2200rpm",
            payload: "45 Tons GCVW",
            trans: "HW19710 10-Speed Manual",
            axle: "6x4 Heavy Duty Axle",
            fuel: "400L Aluminum Tank",
            cabin: "HW79 High-Top Cab"
        }
    },
    6: {
        id: 6,
        name: "Howo A7 | T7 Dump Truck",
        category: "Heavy Mining & Quarry Dump Truck",
        image: "/images/products/product-truck-6.png",
        desc: "High-horsepower 8x4 mining dump truck built for extreme payload capacity and continuous heavy material hauling.",
        specs: {
            engine: "MAN Tech MC13.54 Euro V",
            hp: "540 HP @ 1900rpm",
            payload: "50 Tons Mining Grade",
            trans: "HW25716XST 16-Speed",
            axle: "8x4 Cast Steel Reduction Axle",
            fuel: "600L Heavy Duty Steel Tank",
            cabin: "A7 Reinforced Mining Cab"
        }
    }
};

export function initProductsModal() {
    // Quick View Elements
    const qvModal = document.getElementById('product-quickview-modal');
    const qvBackdrop = document.getElementById('quickview-backdrop');
    const qvClose = document.getElementById('quickview-close');

    const qvImg = document.getElementById('quickview-img');
    const qvTitle = document.getElementById('quickview-title');
    const qvCategory = document.getElementById('quickview-category');
    const qvDesc = document.getElementById('quickview-desc');

    const qvEngine = document.getElementById('quickview-spec-engine');
    const qvHp = document.getElementById('quickview-spec-hp');
    const qvPayload = document.getElementById('quickview-spec-payload');
    const qvTrans = document.getElementById('quickview-spec-trans');
    const qvAxle = document.getElementById('quickview-spec-axle');
    const qvFuel = document.getElementById('quickview-spec-fuel');
    const qvQuoteBtn = document.getElementById('quickview-quote-btn');

    // Compare Elements
    const cmpModal = document.getElementById('product-compare-modal');
    const cmpBackdrop = document.getElementById('compare-backdrop');
    const cmpClose = document.getElementById('compare-close');
    const cmpSelectA = document.getElementById('compare-select-a');
    const cmpSelectB = document.getElementById('compare-select-b');
    const cmpPrevBtn = document.getElementById('compare-prev-btn');
    const cmpNextBtn = document.getElementById('compare-next-btn');
    const cmpQuoteBtn = document.getElementById('compare-quote-btn');

    let currentCompareAId = 1;
    let currentCompareBId = 4;
    let savedScrollY = 0;

    function openModal(modalEl) {
        if (!modalEl) return;

        if (!document.body.classList.contains('modal-open')) {
            savedScrollY = window.pageYOffset || document.documentElement.scrollTop || 0;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${savedScrollY}px`;
            document.body.style.left = '0';
            document.body.style.right = '0';
            document.body.style.width = '100%';
            document.body.style.overflow = 'hidden';
            document.documentElement.classList.add('modal-open');
            document.body.classList.add('modal-open');
        }

        modalEl.removeAttribute('hidden');
    }

    function closeModal(modalEl) {
        if (!modalEl) return;
        modalEl.setAttribute('hidden', '');

        const anyModalOpen = document.querySelector('.product-modal:not([hidden]), .legal-modal:not([hidden])');
        if (!anyModalOpen) {
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.left = '';
            document.body.style.right = '';
            document.body.style.width = '';
            document.body.style.overflow = '';
            document.documentElement.classList.remove('modal-open');
            document.body.classList.remove('modal-open');
            window.scrollTo(0, savedScrollY);
        }
    }

    function setupModalScrollGuard(modalEl) {
        if (!modalEl) return;

        modalEl.addEventListener('wheel', (e) => {
            const scrollable = e.target.closest('.product-modal__content, .product-modal__compare-body');
            if (!scrollable) {
                e.preventDefault();
                return;
            }

            const delta = e.deltaY;
            const up = delta < 0;
            const { scrollTop, scrollHeight, clientHeight } = scrollable;

            if (up && scrollTop <= 0) {
                e.preventDefault();
            } else if (!up && scrollTop + clientHeight >= scrollHeight - 1) {
                e.preventDefault();
            }
        }, { passive: false });

        let startY = 0;
        modalEl.addEventListener('touchstart', (e) => {
            if (e.touches.length === 1) {
                startY = e.touches[0].clientY;
            }
        }, { passive: true });

        modalEl.addEventListener('touchmove', (e) => {
            const scrollable = e.target.closest('.product-modal__content, .product-modal__compare-body');
            if (!scrollable) {
                e.preventDefault();
                return;
            }

            const currentY = e.touches[0].clientY;
            const deltaY = startY - currentY;
            const { scrollTop, scrollHeight, clientHeight } = scrollable;

            if (deltaY < 0 && scrollTop <= 0) {
                e.preventDefault();
            } else if (deltaY > 0 && scrollTop + clientHeight >= scrollHeight - 1) {
                e.preventDefault();
            }
        }, { passive: false });
    }

    setupModalScrollGuard(qvModal);
    setupModalScrollGuard(cmpModal);

    // Populate Quick View Modal
    function openQuickView(productId) {
        const prod = PRODUCTS_DATA[productId] || PRODUCTS_DATA[1];

        if (qvImg) qvImg.src = prod.image;
        if (qvImg) qvImg.alt = prod.name;
        if (qvTitle) qvTitle.textContent = prod.name;
        if (qvCategory) qvCategory.textContent = prod.category;
        if (qvDesc) qvDesc.textContent = prod.desc;

        if (qvEngine) qvEngine.textContent = prod.specs.engine;
        if (qvHp) qvHp.textContent = prod.specs.hp;
        if (qvPayload) qvPayload.textContent = prod.specs.payload;
        if (qvTrans) qvTrans.textContent = prod.specs.trans;
        if (qvAxle) qvAxle.textContent = prod.specs.axle;
        if (qvFuel) qvFuel.textContent = prod.specs.fuel;

        openModal(qvModal);
    }

    // Populate Compare Column A
    function renderCompareA(prodId) {
        const prod = PRODUCTS_DATA[prodId] || PRODUCTS_DATA[1];
        currentCompareAId = prod.id;

        const img = document.getElementById('compare-img-a');
        const name = document.getElementById('compare-name-a');
        const cat = document.getElementById('compare-cat-a');

        if (img) img.src = prod.image;
        if (name) name.textContent = prod.name;
        if (cat) cat.textContent = prod.category;

        if (cmpSelectA) cmpSelectA.value = String(prod.id);

        updateCompareIndicators();
    }

    // Populate Compare Column B
    function renderCompareB(prodId) {
        const prod = PRODUCTS_DATA[prodId] || PRODUCTS_DATA[4];
        currentCompareBId = prod.id;

        const img = document.getElementById('compare-img-b');
        const name = document.getElementById('compare-name-b');
        const cat = document.getElementById('compare-cat-b');

        if (img) img.src = prod.image;
        if (name) name.textContent = prod.name;
        if (cat) cat.textContent = prod.category;

        if (cmpSelectB) cmpSelectB.value = String(prod.id);

        updateCompareIndicators();
    }

    // Evaluate specs between Truck A and Truck B & render green check (✓) and red X (✗) badges
    function updateCompareIndicators() {
        const prodA = PRODUCTS_DATA[currentCompareAId];
        const prodB = PRODUCTS_DATA[currentCompareBId];
        if (!prodA || !prodB) return;

        const hpA = parseInt(prodA.specs.hp, 10) || 0;
        const hpB = parseInt(prodB.specs.hp, 10) || 0;

        const payloadA = parseInt(prodA.specs.payload, 10) || 0;
        const payloadB = parseInt(prodB.specs.payload, 10) || 0;

        const transMatchA = prodA.specs.trans.match(/(\d+)-Speed/i);
        const transMatchB = prodB.specs.trans.match(/(\d+)-Speed/i);
        const transA = transMatchA ? parseInt(transMatchA[1], 10) : 0;
        const transB = transMatchB ? parseInt(transMatchB[1], 10) : 0;

        const fuelA = parseInt(prodA.specs.fuel, 10) || 0;
        const fuelB = parseInt(prodB.specs.fuel, 10) || 0;

        const engineRankA = prodA.specs.engine.includes('Euro V') || prodA.specs.engine.includes('MAN') ? 2 : 1;
        const engineRankB = prodB.specs.engine.includes('Euro V') || prodB.specs.engine.includes('MAN') ? 2 : 1;

        const axleRankA = prodA.specs.axle.includes('8x4') ? 2 : 1;
        const axleRankB = prodB.specs.axle.includes('8x4') ? 2 : 1;

        const metrics = [
            { key: 'engine', valA: engineRankA, valB: engineRankB, textA: prodA.specs.engine, textB: prodB.specs.engine },
            { key: 'hp', valA: hpA, valB: hpB, textA: prodA.specs.hp, textB: prodB.specs.hp },
            { key: 'payload', valA: payloadA, valB: payloadB, textA: prodA.specs.payload, textB: prodB.specs.payload },
            { key: 'trans', valA: transA, valB: transB, textA: prodA.specs.trans, textB: prodB.specs.trans },
            { key: 'axle', valA: axleRankA, valB: axleRankB, textA: prodA.specs.axle, textB: prodB.specs.axle },
            { key: 'fuel', valA: fuelA, valB: fuelB, textA: prodA.specs.fuel, textB: prodB.specs.fuel },
        ];

        let winsA = 0;
        let winsB = 0;

        metrics.forEach(m => {
            const elA = document.getElementById(`compare-${m.key}-a`);
            const elB = document.getElementById(`compare-${m.key}-b`);

            if (m.valA > m.valB) {
                winsA++;
                if (elA) elA.innerHTML = `${m.textA} <span class="cmp-indicator cmp-indicator--check" title="Better Spec">✓</span>`;
                if (elB) elB.innerHTML = `${m.textB} <span class="cmp-indicator cmp-indicator--cross" title="Lower Spec">✗</span>`;
            } else if (m.valB > m.valA) {
                winsB++;
                if (elA) elA.innerHTML = `${m.textA} <span class="cmp-indicator cmp-indicator--cross" title="Lower Spec">✗</span>`;
                if (elB) elB.innerHTML = `${m.textB} <span class="cmp-indicator cmp-indicator--check" title="Better Spec">✓</span>`;
            } else {
                if (elA) elA.innerHTML = `${m.textA} <span class="cmp-indicator cmp-indicator--equal" title="Equal Spec">=</span>`;
                if (elB) elB.innerHTML = `${m.textB} <span class="cmp-indicator cmp-indicator--equal" title="Equal Spec">=</span>`;
            }
        });

        // 7. Key Features (Row 7 at the bottom)
        const featA = document.getElementById('compare-features-a');
        const featB = document.getElementById('compare-features-b');
        const featRankA = (prodA.specs.cabin.includes('Sleeper') || prodA.specs.cabin.includes('Luxury') || prodA.specs.trans.includes('AMT')) ? 2 : 1;
        const featRankB = (prodB.specs.cabin.includes('Sleeper') || prodB.specs.cabin.includes('Luxury') || prodB.specs.trans.includes('AMT')) ? 2 : 1;

        if (featA) {
            featA.innerHTML = `${prodA.specs.cabin} <span class="cmp-indicator ${featRankA > featRankB ? 'cmp-indicator--check' : (featRankA < featRankB ? 'cmp-indicator--cross' : 'cmp-indicator--equal')}">${featRankA > featRankB ? '✓' : (featRankA < featRankB ? '✗' : '=')}</span>`;
        }
        if (featB) {
            featB.innerHTML = `${prodB.specs.cabin} <span class="cmp-indicator ${featRankB > featRankA ? 'cmp-indicator--check' : (featRankB < featRankA ? 'cmp-indicator--cross' : 'cmp-indicator--equal')}">${featRankB > featRankA ? '✓' : (featRankB < featRankA ? '✗' : '=')}</span>`;
        }

        // Update Top Winner Badges
        const tagA = document.getElementById('compare-tag-a');
        const tagB = document.getElementById('compare-tag-b');

        if (tagA) {
            if (winsA > winsB) {
                tagA.className = 'product-modal__compare-tag cmp-tag--winner';
                tagA.innerHTML = '★ HIGHER SPECIFICATION';
            } else {
                tagA.className = 'product-modal__compare-tag';
                tagA.textContent = 'Selected Model';
            }
        }

        if (tagB) {
            if (winsB > winsA) {
                tagB.className = 'product-modal__compare-tag cmp-tag--winner';
                tagB.innerHTML = '★ HIGHER SPECIFICATION';
            } else {
                tagB.className = 'product-modal__compare-tag';
                tagB.textContent = 'Compare Target';
            }
        }
    }

    function openCompare(productId) {
        renderCompareA(productId);

        // Pick a default target truck different from A
        let targetBId = productId === 4 ? 1 : 4;
        renderCompareB(targetBId);

        openModal(cmpModal);
    }

    // Attach Event Listeners to Product Cards (Desktop & Mobile)
    document.querySelectorAll('.product-card').forEach((card, idx) => {
        const prodId = idx + 1;

        const qvBtn = card.querySelector('.product-card__btn--quickview');
        const cmpBtn = card.querySelector('.product-card__btn--compare');

        if (qvBtn) {
            qvBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                openQuickView(prodId);
            });
        }

        if (cmpBtn) {
            cmpBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                openCompare(prodId);
            });
        }

        // On mobile, tapping product image also opens Quick View
        const imgWrap = card.querySelector('.product-card__image-wrap');
        if (imgWrap) {
            imgWrap.addEventListener('click', () => {
                openQuickView(prodId);
            });
        }
    });

    // Close Listeners
    if (qvClose) qvClose.addEventListener('click', () => closeModal(qvModal));
    if (qvBackdrop) qvBackdrop.addEventListener('click', () => closeModal(qvModal));

    if (cmpClose) cmpClose.addEventListener('click', () => closeModal(cmpModal));
    if (cmpBackdrop) cmpBackdrop.addEventListener('click', () => closeModal(cmpModal));

    // Prevent background scrolling when dragging/wheeling on backdrops
    [qvBackdrop, cmpBackdrop].forEach(backdrop => {
        if (backdrop) {
            backdrop.addEventListener('wheel', (e) => e.preventDefault(), { passive: false });
            backdrop.addEventListener('touchmove', (e) => e.preventDefault(), { passive: false });
        }
    });

    // Slideshow Navigation for Compare Truck B
    if (cmpPrevBtn) {
        cmpPrevBtn.addEventListener('click', () => {
            let nextB = currentCompareBId - 1;
            if (nextB < 1) nextB = 6;
            if (nextB === currentCompareAId) {
                nextB = nextB - 1 < 1 ? 6 : nextB - 1;
            }
            renderCompareB(nextB);
        });
    }

    if (cmpNextBtn) {
        cmpNextBtn.addEventListener('click', () => {
            let nextB = currentCompareBId + 1;
            if (nextB > 6) nextB = 1;
            if (nextB === currentCompareAId) {
                nextB = nextB + 1 > 6 ? 1 : nextB + 1;
            }
            renderCompareB(nextB);
        });
    }

    if (cmpSelectA) {
        cmpSelectA.addEventListener('change', (e) => {
            renderCompareA(parseInt(e.target.value, 10));
        });
    }

    if (cmpSelectB) {
        cmpSelectB.addEventListener('change', (e) => {
            renderCompareB(parseInt(e.target.value, 10));
        });
    }

    // Scroll to Quote CTA buttons from modals
    [qvQuoteBtn, cmpQuoteBtn].forEach(btn => {
        if (btn) {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                closeModal(qvModal);
                closeModal(cmpModal);

                const quoteSec = document.getElementById('quote');
                if (quoteSec) {
                    quoteSec.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    });

    // Escape Key Handler
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeModal(qvModal);
            closeModal(cmpModal);
        }
    });
}
