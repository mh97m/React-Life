import React, { useState } from "react";
import Jobs from "../../Jobs.json";

function JobInfo({ formData, setFormData }) {
    const [results, setResults] = useState([]);

    const search = (query) => {
        const results =
            query.target.value.length > 2
                ? Jobs.filter((value) => {
                      return value.Caption.toLowerCase().includes(
                          query.target.value.toLowerCase()
                      );
                  })
                : [];
        setResults({ ...results, results });
    };

    const handleChange = (e) => {
        setFormData({
            ...formData,
            [e.target.name]: e.target.value,
            job_id: 0,
        });
        search(e);
    };

    return (
        <div className="job-container">
            <input
                name="job"
                type="text"
                placeholder="عنوان شغل"
                value={formData.job}
                onChange={handleChange}
            />
            {results.results?.map((item, index) => {
                if (index < 5) {
                    return (
                        <span
                            onClick={(e) => {
                                setFormData({
                                    ...formData,
                                    job_id: item.Id.toString(),
                                    job: e.target.innerHTML,
                                });
                            }}
                            key={index}
                            className="job-offer"
                        >
                            {item.Caption}
                        </span>
                    );
                }
            })}
        </div>
    );
}

export default JobInfo;
