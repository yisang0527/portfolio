document.getElementById('filter-reset').addEventListener('click', function() {
    // 'category'는 "초등"으로 유지
    document.getElementById('category').value = 'elementary';
    
    // 'subject'와 'grade'는 "전체"로 초기화
    document.getElementById('subject').value = 'all';
    document.getElementById('grade').value = 'all';
});
