# Taxonomylist field type

This adds a new field type of `taxonomylist`. This works in the same way as a select field. 

To add a taxonomylist field, first install this extension then modify your `contenttypes.yml` file to add a
new field, something like this:

```
# List will show ALL taxonomies
    taxonomy_to_show:
        type: taxonomylist
        label: "Taxonomy to show"
        
# List will only show taxonomies that have been specified (in this case, categories)
    taxonomy_to_show:
        type: taxonomylist
        label: "Taxonomy to show"
        taxonomies: [ categories ]
```

This field does not show tag type taxonomy terms. 
